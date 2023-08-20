<?php
/** @var \App\Models\MiscModel $model */
$forceShow = false;
if (method_exists($model, 'pinnedMembers') && !$model->pinnedMembers->isEmpty()) {
    $forceShow = true;
}
if (auth()->check() && auth()->user()->can('update', $model)) {
    $forceShow = true;
}
?>

@if ($forceShow || $model->entity->hasPins())

    @ads('profile')
    <div>
        <div class="vm-placement" data-id="{{ config('tracking.venatus.profile') }}"></div>
    </div>
    @endads
    <div class="sidebar-section-box entity-pins mb-5  overflow-hidden {{ $model->entity->hasPins() ? '' : 'entity-empty-pin' }}">
        <div class="sidebar-section-title cursor-pointer text-lg user-select border-b" data-toggle="collapse" data-target="#sidebar-pinned-elements">
            <i class="fa-solid fa-chevron-right" aria-hidden="true" style="display: none"></i>
            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>

            {{ __('entities/pins.title') }}
            <a href="//docs.kanka.io/en/latest/features/profile-sidebar.html" target="_blank" aria-label="Open docs about profile sidebare">
                <x-icon class="fa-solid fa-question-circle pull-right"></x-icon>
            </a>
        </div>
        <div class="sidebar-elements grid collapse !visible in overflow-hidden" id="sidebar-pinned-elements">
            <ul class="pins m-0 my-1 p-0 list-none">
                @includeWhen(!$model->entity->pinnedFiles->isEmpty() || !$model->entity->pinnedAliases->isEmpty(), 'entities.components.assets')
                @include('entities.components.relations')
                @includeWhen(method_exists($model, 'pinnedMembers') && !$model->pinnedMembers->isEmpty(), 'entities.components.members')
                @includeWhen($model->entity->accessAttributes(), 'entities.components.attributes')
            </ul>
        </div>
    </div>
@endif

@includeIf('entities.components.profile.' . $name)

@includeWhen(!isset($printing) && $campaign->boosted() && $model->entity->hasLinks(), 'entities.components.links')

@include('entities.components.history')
