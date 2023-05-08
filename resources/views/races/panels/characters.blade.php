<?php
/**
 * @var \App\Models\Race $model
 * @var \App\Models\Character $character
 */

$allMembers = true;
$datagridOptions = [
    $model,
    'init' => 1
];
if (request()->has('race_id')) {
    $datagridOptions['race_id'] = (int) $model->id;
    $allMembers = true;
}
$datagridOptions = Datagrid::initOptions($datagridOptions);
?>
<div class="box box-solid" id="race-characters">
    <div class="box-header with-border">
        <h3 class="box-title">
            {!! \App\Facades\Module::plural(config('entities.ids.character'), __('entities.characters')) !!}
        </h3>

        <div class="box-tools pull-right">
            <a href="#" class="btn btn-box-tool" data-toggle="dialog" data-target="help-modal">
                <x-icon class="question"></x-icon> {{ __('crud.actions.help') }}
            </a>

            @if (request()->has('race_id'))
                <a href="{{ route('races.show', $model) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter" aria-hidden="true"></i> {{ __('crud.filters.all') }} ({{ $model->allCharacters()->count() }})
                </a>
            @else
                <a href="{{ route('races.show', [$model, 'race_id' => $model->id]) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter" aria-hidden="true"></i> {{ __('crud.filters.direct') }} ({{ $model->characters()->count() }})
                </a>
            @endif
            @can('update', $model)
                <a href="{{ route('races.members.create', ['race' => $model->id]) }}" class="btn btn-primary btn-sm"
                   data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('races.members.create', $model->id) }}">
                    <x-icon class="plus"></x-icon>
                    <span class="hidden-sm hidden-xs">{{ __('crud.add') }}</span>
                </a>
            @endcan
        </div>
    </div>
    <div id="datagrid-parent" class="table-responsive">
        @include('layouts.datagrid._table', ['datagridUrl' => route('races.characters', $datagridOptions)])
    </div>
</div>



@section('modals')
    @parent
    @include('partials.helper-modal', [
        'id' => 'help-modal',
        'title' => __('crud.actions.help'),
        'textes' => [
            __('races.characters.helpers.' . ($allMembers ? 'all_' : null) . 'characters')
        ]
    ])
@endsection
