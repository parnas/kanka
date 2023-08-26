<?php /** @var \App\Models\Map $model */?>
@extends('layouts.app', [
    'title' => __('maps/layers.index.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])


@section('entity-header-actions')
    @can('update', $model)
        <div class="header-buttons flex gap-2 items-center justify-end">
            <a href="https://docs.kanka.io/en/latest/entities/maps/layers.html" class="btn2 btn-sm" target="_blank">
                <x-icon class="question"></x-icon>
                {{ __('crud.actions.help') }}
            </a>
            @if ($model->explorable())
                <a href="{{ route('maps.explore', [$campaign, $model]) }}" class="btn2 btn-primary btn-sm">
                    <x-icon class="map"></x-icon>
                    {{ __('maps.actions.explore') }}
                </a>
            @endif
            <a href="{{ route('maps.map_layers.create', [$campaign, $model]) }}" class="btn2 btn-accent btn-sm"
                data-url="{{ route('maps.map_layers.create', [$campaign, $model]) }}"
            >
            <x-icon class="plus"></x-icon>
                {{ __('maps/layers.actions.add') }}
            </a>
        </div>
    @endcan
@endsection

@section('content')
    @include('entities.pages.subpage', [
        'active' => 'layers',
        'breadcrumb' => __('maps.panels.layers'),
        'view' => 'maps.panels.layers',
        'entity' => $model->entity,
    ])
@endsection
