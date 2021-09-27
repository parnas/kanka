@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => trans('entities/inventories.update.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => $entity->url('index'), 'label' => trans($entity->pluralType() . '.index.title')],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        ['url' => route('entities.inventory', $entity->id), 'label' => trans('crud.tabs.inventory')],
    ]
])

@section('content')
    {!! Form::model($inventory, ['route' => ['entities.inventories.update', $entity->id, $inventory], 'method' => 'PATCH', 'data-shortcut' => 1]) !!}

    <div class="box box-solid">
        @if ($ajax)
            <div class="box-header with-border">
                <h3 class="box-title with-border">
                    {{ __('entities/inventories.update.title', ['name' => $entity->name]) }}
                </h3>
                <div class="box-tools pull-right">

                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        @endif
        <div class="box-body">
            @include('partials.errors')
            @include('entities.pages.inventory._form')
        </div>
        <div class="box-footer @if($ajax) text-right @endif">
            <button class="btn btn-success">{{ trans('crud.save') }}</button>
            @includeWhen(!request()->ajax(), 'partials.or_cancel')
        </div>
    </div>

    {!! Form::hidden('entity_id', $entity->id) !!}
    {!! Form::close() !!}
@endsection
