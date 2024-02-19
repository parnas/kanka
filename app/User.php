<?php

namespace App;

use App\Facades\Identity;
use App\Facades\Img;
use App\Facades\PostCache;
use App\Facades\SingleUserCache;
use App\Facades\UserCache;
use App\Models\AppRelease;
use App\Models\Campaign;
use App\Facades\CampaignLocalization;
use App\Models\CampaignRole;
use App\Models\Concerns\UserBoosters;
use App\Models\Concerns\UserTokens;
use App\Models\Pledge;
use App\Models\Scopes\UserScope;
use App\Models\UserLog;
use App\Models\UserSetting;
use App\Models\Relations\UserRelations;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use App\Models\Concerns\LastSync;

/**
 * Class User
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $locale
 * @property integer|null $last_campaign_id
 * @property string|null $avatar
 * @property string $provider
 * @property integer $provider_id
 * @property Carbon $last_login_at
 * @property integer $welcome_campaign_id
 * @property boolean $newsletter
 * @property boolean $has_last_login_sharing
 * @property string|null $pledge
 * @property string|null $timezone
 * @property string|null $currency
 * @property int $referral_id
 * @property Carbon|string|null $card_expires_at
 * @property Carbon|string|null $banned_until
 * @property Carbon|string|null $created_at
 * @property Collection|array $settings
 * @property Collection|array $profile
 * @property Campaign $campaign
 *
 * Virtual (from \App\Models\UserSetting)
 * @property bool $advancedMentions
 * @property bool $defaultNested
 * @property string $campaignSwitcherOrderBy
 *
 * @property string $stripe_id
 */
class User extends \Illuminate\Foundation\Auth\User
{
    use Billable;
    use HasApiTokens;
    use HasFactory;
    use LastSync;
    use Notifiable;
    use UserBoosters;
    use UserRelations;
    use UserScope;
    use UserSetting;
    use UserTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_campaign_id',
        'provider',
        'provider_id',
        'newsletter',
        'timezone',
        'campaign_role',
        'theme',
        'locale', // Keep this for the LocaleChange middleware
        'last_login_at',
        'has_last_login_sharing',
        'pledge',
        'referral_id',
        'profile',
        'settings',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 'remember_token', 'card_expires_at',
    ];

    /**
     * Casted variables
     * @var array<string, string>
     */
    protected $casts = [
        'settings' => 'array',
        'profile' => 'array',
        'card_expires_at' => 'datetime',
        'last_login_at' => 'date',
        'banned_until' => 'date',
    ];

    /**
     * Get the other campaigns of the user
     */
    public function moveCampaignList(Campaign $campaign, bool $hasEmpty = true): array
    {
        $campaigns = $hasEmpty ? [0 => ''] : [];
        foreach ($this->campaigns()->whereNotIn('campaign_id', [$campaign->id])->get() as $campaign) {
            $campaigns[$campaign->id] = $campaign->name;
        }
        return $campaigns;
    }

    /**
     * @param int $size = 40
     */
    public function getAvatarUrl(int $size = 40): string
    {
        if (!empty($this->avatar) && $this->avatar != 'users/default.png') {
            return Img::crop($size, $size)->url($this->avatar);
        } else {
            return '/images/defaults/user.svg';
        }
    }

    /**
     * List of roles a user has in a campaign
     */
    public function rolesList(Campaign $campaign): string
    {
        /** @var CampaignRole[] $roles */
        $roles = $this->campaignRoles->where('campaign_id', $campaign->id);
        $roleLinks = [];
        foreach ($roles as $role) {
            if (auth()->user()->isAdmin()) {
                $roleLinks[] = link_to_route('campaign_roles.show', $role->name, [$campaign, $role->id]);
            } else {
                $roleLinks[] = $role->name;
            }
        }
        return (string) implode(', ', $roleLinks);
    }

    /**
     * Determine if a user has a specific role
     */
    public function hasCampaignRole(int $roleId): bool
    {
        return $this->campaignRoles->where('id', $roleId)->count() > 0;
    }

    /**
     * Figure out if the user is an admin of the current campaign
     */
    public function isAdmin(): bool
    {
        $campaign = CampaignLocalization::getCampaign();
        return UserCache::user($this)->campaign($campaign)->admin();
    }

    /**
     * Check if a user has campaigns
     */
    public function hasCampaigns($count = 0): bool
    {
        return UserCache::user($this)->campaigns()->count() > $count;
    }

    /**
     * Check if the user has other campaigns than the current one
     */
    public function hasOtherCampaigns(int $campaignId): bool
    {
        $campaigns = UserCache::campaigns();
        return $campaigns->where('campaign_id', '<>', $campaignId)->count() > 0;
    }

    /**
     * Determine if a user is a subscriber
     */
    public function isSubscriber(): bool
    {
        return $this->hasRole(Pledge::ROLE) || $this->hasRole('admin');
    }

    /**
     * Determine if a user has a legacy patreon sync set up
     */
    public function isLegacyPatron(): bool
    {
        return $this->hasRole(Pledge::ROLE) && !empty($this->patreon_email);
    }

    /**
     * Determine if a user is a goblin (deprecated)
     */
    public function isGoblin(): bool
    {
        return !empty($this->pledge) && $this->pledge !== Pledge::KOBOLD;
    }

    /**
     * Determine if a user is an elemental
     */
    public function isElemental(): bool
    {
        return (bool) (!empty($this->pledge) && $this->pledge == Pledge::ELEMENTAL);
    }

    /**
     */
    public function isOwlbear(): bool
    {
        return !empty($this->pledge) && $this->pledge == Pledge::OWLBEAR;
    }

    /**
     */
    public function isWyvern(): bool
    {
        return !empty($this->pledge) && $this->pledge == Pledge::WYVERN;
    }

    /**
     * API throttling is increased for subscribers
     */
    public function getRateLimitAttribute(): int
    {
        return $this->isGoblin() ? 90 : 30;
    }

    /**
     * Currency symbol
     */
    public function currencySymbol(): string
    {
        if ($this->billedInEur()) {
            return '€';
        }
        return 'US$';
    }

    /**
     * Determine if the user is billed in EUR.
     */
    public function billedInEur(): bool
    {
        return $this->currency() === 'eur';
    }

    /**
     */
    public function adminCampaigns(): array
    {
        $campaigns = [];

        $roles = $this
            ->campaignRoles()
            ->where('campaign_roles.is_admin', 1)->with('campaign')
            ->get();
        foreach ($roles as $role) {
            $campaigns[$role->campaign->id] = $role->campaign->name;
        }

        return $campaigns;
    }

    /**
     * Check if User has a Role(s) associated.
     *
     * @param string|array $name The role(s) to check.
     *
     */
    public function hasRole($name): bool
    {
        $roles = $this->roles->pluck('name')->toArray();

        foreach ((is_array($name) ? $name : [$name]) as $role) {
            if (in_array($role, $roles)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a user is using a social login
     */
    public function isSocialLogin(): bool
    {
        return !empty($this->provider);
    }

    /**
     * Number of entities the user has created
     */
    public function createdEntitiesCount(): string
    {
        return (string) number_format(SingleUserCache::user($this)->entitiesCreatedCount());
    }

    public function hasPlugins(): bool
    {
        return config('marketplace.enabled') && $this->plugins->count();
    }

    /**
     * Get the Discord app of the user
     */
    public function discord()
    {
        return $this->apps->where('app', 'discord')->first();
    }

    /**
     * Get the user's role IDs based on the campaign
     */
    public function campaignRoleIDs(int $campaignID): array
    {
        return UserCache::roles()->pluck('id')->toArray();
    }

    /**
     * Log an event on the user
     * @return $this
     */
    public function log(int $type): self
    {
        if (!config('logging.enabled')) {
            return $this;
        }
        UserLog::create([
            'user_id' => $this->id,
            'type_id' => $type,
        ]);
        return $this;
    }

    /**
     * Determine if the user is banned
     */
    public function isBanned(): bool
    {
        return !empty($this->banned_until) && $this->banned_until->isFuture();
    }

    /**
     * Determine if the user has achievements to display on their profile page
     */
    public function hasAchievements(): bool
    {
        return $this->isWordsmith();
    }

    /**
     * Determine if a user has the Wordsmith role
     */
    public function isWordsmith(): bool
    {
        return $this->hasRole('wordsmith');
    }

    /**
     * Check if user has 2FA.
     */
    public function passwordSecurity()
    {
        return $this->hasOne('App\Models\PasswordSecurity');
    }

    public function initials(): string
    {
        if (!Str::contains(' ', $this->name)) {
            return Str::limit($this->name, 2, '');
        }
        $explode = explode(' ', $this->name);
        return $explode[0] . $explode[1];
    }

    /**
     * Determine if the user has unread notifications or kanka alerts
     */
    public function hasUnread(): bool
    {
        if (Identity::isImpersonating()) {
            return false;
        }

        // Unread notifications
        $releases = PostCache::latest();
        /** @var AppRelease $release */
        foreach ($releases as $release) {
            if (!$release->alreadyRead()) {
                return true;
            }
        }

        return $this->unreadNotifications()->count() > 0;
    }

    /**
     * Fraud detection system
     */
    public function isFrauding(): bool
    {
        // Fraud detection can be turned on or off
        if (!config('subscription.fraud_detection')) {
            return false;
        }
        // Someone with a provider (twitter, fb) login is always considered safe
        if (!empty($this->provider)) {
            return false;
        }

        $validation = $this->userValidation()->valid()->first();
        return ! ($validation)



        ;

        // If the account was created recently, add some small checks
        /*if ($this->created_at->isAfter(Carbon::now()->subHour())) {
            // User's name is directly in the campaign name
            if (Str::startsWith($this->email, $this->name . '@')) {
                return true;
            } elseif ($this->campaigns()->count() === 1) {
                $campaign = $this->campaigns()->first();
                // Only the 4 starting entities
                if ($campaign->entities()->withInvisible()->count() === 4) {
                    return true;
                }
            }
        }*/
        // Recent fails are a clear indicator of someone cycling through cards
        return $this->logs()
            ->where('type_id', UserLog::TYPE_FAILED_CHARGE_EMAIL)
            ->whereDate('created_at', '>=', Carbon::now()->subHour()->toDateString())
            ->count() >= 2;
    }

    /**
     * List of campaigns the user is the only admin of. This is used for the automatic purge warning emails
     */
    public function onlyAdminCampaigns(): array
    {
        $campaigns = [];
        $userCampaigns = $this->campaigns()->with(['roles', 'roles.users'])->get();
        foreach ($userCampaigns as $campaign) {
            /** @var CampaignRole|null $adminRole */
            $adminRole = $campaign->roles->where('is_admin', true)->first();
            if (!$adminRole) {
                continue;
            }

            // If the user isn't in the admin
            $isAdmin = false;
            foreach ($adminRole->users as $member) {
                if ($member->user_id === $this->id) {
                    $isAdmin = true;
                }
            }

            if (!$isAdmin || $adminRole->users->count() > 1) {
                continue;
            }

            // The user is the only admin
            $campaigns[] = $campaign;
        }

        return $campaigns;
    }

    /**
     * Check if user is subscribed via PayPal
     */
    public function hasPayPal(): bool
    {
        // @phpstan-ignore-next-line
        return $this->subscribed('kanka') && $this->subscriptions()->first() && str_contains($this->subscriptions()->first()->stripe_price, 'paypal');
    }

    public function isStripeYearly(): bool
    {
        $prices = array_merge(
            config('subscription.owlbear.yearly'),
            config('subscription.wyvern.yearly'),
            config('subscription.elemental.yearly'),
        );
        return $this->subscribedToPrice($prices, 'kanka');
    }
}
