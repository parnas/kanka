<?php /**
 * @var \App\Models\Map $model
 * @var \App\Services\CampaignService $campaign
 */
?>
@if ($model->organisation)
    <div class="entity-header-sub pull-left">
        <x-icon class="ra ra-hood" :title="__('crud.fields.parent')"></x-icon>

        {!! $model->organisation->tooltipedLink() !!}
    </div>
@endif
