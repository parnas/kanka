<?php

namespace App\Models;

use App\Facades\CampaignLocalization;
use App\Facades\Mentions;
use App\Models\Concerns\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class TimelineEra
 * @package App\Models
 *
 * @property int $id
 * @property int|null $timeline_id
 * @property string $name
 * @property string $entry
 * @property string $abbreviation
 * @property string|int $start_year
 * @property string|int $end_year
 * @property bool $is_collapsed
 * @property int|null $position
 *
 * @property Timeline $timeline
 * @property TimelineElement[] $elements
 * @property TimelineElement[] $orderedElements
 *
 * @method static self|Builder ordered()
 */
class TimelineEra extends Model
{
    use SortableTrait;

    /** @var string[]  */
    protected $fillable = [
        'timeline_id',
        'name',
        'abbreviation',
        'entry',
        'start_year',
        'end_year',
        'is_collapsed',
    ];

    protected $sortable = [
        'name',
        'position',
        'abbreviation',
        'start_year',
        'end_year',
        'is_collapsed',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeline()
    {
        return $this->belongsTo(Timeline::class, 'timeline_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function elements()
    {
        return $this->hasMany(TimelineElement::class, 'era_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderedElements()
    {
        return $this->elements()
            ->ordered()
        ;
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeOrdered(Builder $query)
    {
        return $query
            ->orderBy('position')
            ->orderBy('start_year')
            ->orderBy('end_year')
            ->orderBy('name');
    }

    /**
     * @return bool
     */
    public function collapsed(): bool
    {
        return $this->is_collapsed;
    }

    /**
     * Get the age header of the era
     * @return string
     */
    public function ages(): string
    {
        $a = new \NumberFormatter(app()->getLocale(), \NumberFormatter::DECIMAL);
        $from = mb_strlen($this->start_year);
        $to = mb_strlen($this->end_year);

        if ($from == 0 && $to == 0) {
            return '';
        }

        if ($from == 0) {
            return '< ' . $a->format($this->start_year);
        } elseif ($to == 0) {
            return '> ' . $a->format($this->start_year);
        }

        return $a->format($this->start_year) . ' &mdash; ' . $a->format($this->end_year);
    }

    /**
     * @return bool
     */
    public function hasEntity(): bool
    {
        return false;
    }

    /**
     * Functions for the datagrid2
     * @return string
     */
    public function url(string $where): string
    {
        return 'timelines.timeline_eras.' . $where;
    }
    public function routeParams(array $options = []): array
    {
        return $options + [$this->timeline_id, $this->id];
    }

    /**
     * Override the get link
     * @return string
     */
    public function getLink(): string
    {
        $campaign = CampaignLocalization::getCampaign();
        return route('timelines.timeline_eras.edit', [$campaign, 'timeline' => $this->timeline_id, $this->id]);
    }

    /**
     * Override the tooltiped link for the datagrid
     * @param string|null $displayName
     * @return string
     */
    public function tooltipedLink(string $displayName = null): string
    {
        return '<a href="' . $this->getLink() . '">' .
            (!empty($displayName) ? $displayName : e($this->name)) .
            '</a>';
    }

    /**
     * @return mixed
     */
    public function getEntryForEditionAttribute()
    {
        $text = Mentions::parseForEdit($this);
        return $text;
    }

    /**
     * @return array|string[]
     */
    public function positionOptions($position = null, bool $new = false): array
    {
        $options = [null => __('posts.position.dont_change')];

        $elements = $this->orderedElements;
        $hasFirst = false;
        foreach ($elements as $element) {
            if (!$element->visible()) {
                continue;
            }
            if (!$hasFirst) {
                $hasFirst = true;
                $options[1] = __('posts.position.first');
            }
            $key = $element->position;
            $lang = __('maps/layers.placeholders.position_list', ['name' => $element->elementName()]);
            if (app()->isLocal()) {
                $lang .= ' (' . $key . ')';
            }
            if (!($position == $key)) {
                $options[$key + 1] = $lang;
            }
        }

        // Didn't have a first option added, add one now
        if (!$hasFirst) {
            $options[1] = __('posts.position.first');
        }

        if ($new) {
            unset($options[null]);
        }

        return $options;
    }
}
