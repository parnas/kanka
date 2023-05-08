<?php /** @var \App\Models\MiscModel $model */?>

@inject('campaignService', 'App\Services\CampaignService')
@php
$headerImage = true;
@endphp

@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => $model->name . ' - ' . \App\Facades\Module::plural($model->entityTypeId(), __('entities.' . $name)),
    'breadcrumbs' => false,
    'miscModel' => $model,
    'canonical' => true,
    'mainTitle' => false,
    'bodyClass' => 'entity-story',
])

@section('og')
@if ($tooltip = $model->entity->mappedPreview())<meta property="og:description" content="{{ $tooltip }}" />@endif
@if ($model->image)<meta property="og:image" content="{{ $model->thumbnail(200)  }}" />@endif
    <meta property="og:url" content="{{ $model->getLink()  }}" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection


@section('entity-header-actions')
    <div class="header-buttons inline-block pull-right ml-auto">
        <div class="btn-group">
            <div class="btn btn-default btn-sm btn-post-collapse" title="{{ __('entities/story.actions.collapse_all') }}" data-toggle="tooltip">
                <i class="fa-solid fa-grip-lines" aria-hidden="true"></i>
            </div>
            <div class="btn btn-default btn-sm btn-post-expand" title="{{ __('entities/story.actions.expand_all') }}" data-toggle="tooltip">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </div>
        </div>
        @can('update', $model)
            <a href="{{ $model->getLink('edit') }}" class="btn btn-primary btn-sm ">
                <x-icon class="pencil"></x-icon> {{ __('crud.edit') }}
            </a>
        @endcan
        @can('post', [$model, 'add'])
        <a href="{{ route('entities.posts.create', $model->entity) }}" class="btn btn-warning btn-sm btn-new-post"
           data-entity-type="post" data-toggle="tooltip" title="{{ __('crud.tooltips.new_post') }}">
            <x-icon class="plus"></x-icon> {{ __('crud.actions.new_post') }}
        </a>
        @endcan
    </div>
@endsection



@section('content')

    @include('partials.ads.top')
    @if(view()->exists($name . '.show'))
        @include($name . '.show')
    @else
        @include('cruds.overview')
    @endif
@endsection
