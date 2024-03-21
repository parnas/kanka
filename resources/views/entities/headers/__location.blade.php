<?php /**
 * @var \App\Models\MiscModel $model
 */
?>
@if ($campaign->enabled('locations') && $model->location)
    <div class="entity-header-sub pull-left">
        <x-icon :class="\App\Facades\Module::duoIcon('location')" :title="__('crud.fields.parent')" />

        @if ($model->location->location)
            {!! __('crud.fields.locations', [
                'first' => $model->location->tooltipedLink(),
                'second' => $model->location->location->tooltipedLink(),
            ]) !!}
        @else
            {!! $model->location->tooltipedLink() !!}
        @endif

    </div>
@endif
