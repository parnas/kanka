<?php

namespace App\Traits;

use App\Models\Scopes\CampaignScope;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait CampaignTrait
 * @package App\Traits
 *
 * @method static Builder|self allCampaigns()
 */
trait CampaignTrait
{
    /** @var bool Determine if the query context is limited to the current campaign */
    protected bool $withCampaignLimit = true;

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopeAllCampaigns(Builder $builder): Builder
    {
        $this->withCampaignLimit = false;
        return $builder;
    }

    /**
     * Check if limited to the current campaign context
     * @return bool
     */
    public function withCampaignLimit(): bool
    {
        return $this->withCampaignLimit;
    }

    /**
     * @return void
     */
    public static function bootCampaignTrait()
    {
        static::addGlobalScope(new CampaignScope());
    }
}
