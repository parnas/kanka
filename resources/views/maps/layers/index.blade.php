@extends('layouts.app', [
    'title' => __('maps.maps.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => false,
    'mainTitle' => false,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('entity-header-actions')
    @can('update', $model)
        <div class="header-buttons">
            <a href="https://docs.kanka.io/en/latest/entities/maps/layers.html" class="btn btn-default" target="_blank">
                <i class="fa-solid fa-question-circle" aria-hidden="true"></i> {{ __('crud.actions.help') }}
            </a>
            <a href="{{ route('maps.map_layers.create', ['map' => $model]) }}" class="btn btn-warning"
                data-url="{{ route('maps.map_layers.create', ['map' => $model]) }}"
            >
            <i class="fa-solid fa-plus"></i> {{ __('maps/layers.actions.add') }}
            </a>
        </div>
    @endcan
@endsection

@section('content')
    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('maps'), 'label' => __('maps.index.title')],
                null
            ]
        ])
        @include('maps._menu', ['active' => 'layers'])
        <div class="entity-main-block">
            @include('maps.panels.layers')
            @includeWhen($rows->count() > 1, 'maps.layers._reorder')
        </div>
    </div>
@endsection
