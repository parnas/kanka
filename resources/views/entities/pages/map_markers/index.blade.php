<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\TimelineElement $element
 */?>
@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('entities/map-points.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        Breadcrumb::entity($entity)->list(),
        Breadcrumb::show(),
        __('crud.tabs.map-points')
    ],
    'mainTitle' => false,
    'canonical' => true,
    'miscModel' => $entity->child,
    'bodyClass' => 'entity-map-markers'
])


@include('entities.components.header', ['model' => $entity->child, 'entity' => $entity])

@section('content')
    @include('partials.errors')
    <div class="row entity-grid">
        <div class="col-md-2 entity-sidebar-submenu">
            @include('entities.components.menu_v2', ['active' => 'map-points', 'model' => $entity->child])
        </div>
        <div class="col-md-10 entity-main-block">
            <h3 class="">
                {{ __('entities/map-points.title', ['name' => $entity->name]) }}
            </h3>
            <x-box css="box-entity-map-markers">

                <p class="help-block">{{ __('entities/map-points.helper') }}</p>

                <table id="entity-map-points" class="table table-hover">
                    <tbody><tr>
                        <th>{{ __('locations.fields.name') }}</th>
                        <th>{{ __('locations.fields.map') }}</th>
                    </tr>
                    @foreach ($markers as $marker)
                        <tr>
                            <td>
                                {!! $marker->map->tooltipedLink() !!}
                            </td>
                            <td>
                                <a href="{{ route('maps.explore', [$marker->map_id, 'lat' => $marker->latitude, 'lng' => $marker->longitude]) }}" target="_blank">
                                    <x-icon class="map"></x-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($data as $location)
                        <tr>
                            <td>
                                {!! $location->location->tooltipedLink() !!}
                            </td>
                            <td>
                                @if (!empty($location->location->map) && (!$location->location->is_map_private || (auth()->check() && auth()->user()->can('map', $location->location))))
                                    <a href="{{ route('locations.map', $location->location_id) }}">
                                        <x-icon class="map"></x-icon>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </x-box>
            {{ $markers->links() }}
        </div>
    </div>
@endsection
