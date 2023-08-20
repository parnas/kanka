<?php /**
 * @var \App\Models\TimelineEra $era */?>
@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('timelines.reorder.title', ['name' => $timeline->name]),
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $timeline,
    'bodyClass' => 'timeline-eras-reorder'
])


@section('content')
    @include('partials.errors')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $timeline,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('timelines'), 'label' => \App\Facades\Module::plural(config('entities.ids.timeline'), __('entities.timelines'))],
                __('crud.actions.reorder')
            ]
        ])

        @include('entities.components.menu_v2', ['active' => 'reorder', 'model' => $timeline])

        <div class="entity-main-block">
            @include('timelines.reorder._reorder')
        </div>
    </div>
@endsection
