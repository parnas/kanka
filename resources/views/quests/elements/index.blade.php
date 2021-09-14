<?php /** @var \App\Models\QuestElement $element */?>
@extends('layouts.app', [
    'title' => __('quests.elements.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index('quests'), 'label' => __('quests.index.title')],
        ['url' => route('quests.show', $model), 'label' => $model->name],
        __('quests.show.tabs.elements')
    ],
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaign', 'App\Services\CampaignService')


@section('entity-header-actions')
    @can('update', $model)
        <div class="header-buttons">

            <a href="{{ route('quests.quest_elements.create', ['quest' => $model->id]) }}" class="btn btn-sm btn-warning">
                <i class="fa fa-plus"></i>
                <span class="hidden-xs hidden-sm">{{ __('quests.show.actions.add_element') }}</span>
            </a>
        </div>
    @endcan
@endsection

@include('entities.components.header', ['model' => $model])

@section('content')
    @include('partials.errors')
    <div class="row entity-grid">
        <div class="col-md-2 entity-sidebar-submenu">
            @include('quests._menu', ['active' => 'elements', 'name' => 'quests'])
        </div>
        <div class="col-md-10 entity-main-block">
            <div class="row export-hidden">
                <div class="col-md-6">
                    @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#entity-main-block'])
                </div>
            </div>
            <div class="row margin-top" id="quest-elements">
                @foreach ($elements as $element)
                    <div class="col-md-6">
                        <div class="box box-widget widget-user-2 box-quest-element">
                            <div class="widget-user-header {{ $element->colourClass() }}">
                                <div class="widget-user-image">
                                    <div class="entity-image" style="background-image: url('{{ $element->entity->avatar(true) }}')" title="{{ $element->entity->name }}">
                                    </div>
                                </div>

                                <h3 class="widget-user-username">
                                    @if ($element->is_private)
                                        <i class="fas fa-lock pull-right" title="{{ __('crud.is_private') }}"></i>
                                    @endif
                                    {!! $element->entity->tooltipedLink() !!}
                                </h3>
                                <h5 class="widget-user-desc">{{ $element->role }}<br /></h5>
                            </div>
                            <div class="box-body">
                                <p>{!! $element->entry() !!}</p>
                            </div>
                            <div class="box-footer text-right">
                                <div class="float-left">
                                @include('cruds.partials.visibility', ['model' => $element])
                                </div>
                                @can('update', $model)
                                    <a href="{{ route('quests.quest_elements.edit', [$model, $element]) }}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-edit" title="{{ __('crud.edit') }}"></i>
                                    </a>
                                    <button class="btn btn-xs btn-danger delete-confirm" data-toggle="modal" data-name="{{ $element->entity->name }}"
                                            data-target="#delete-confirm" data-delete-target="delete-form-{{ $element->id }}"
                                            title="{{ __('crud.remove') }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => [
                                            'quests.quest_elements.destroy',
                                            $model,
                                            $element
                                        ],
                                        'style'=>'display:inline',
                                        'id' => 'delete-form-' . $element->id
                                    ]) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {!! $elements->fragment('quest-elements')->links() !!}

        </div>
    </div>
@endsection
