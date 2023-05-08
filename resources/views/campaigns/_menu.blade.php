<?php
/** @var App\Models\Campaign $campaign
 * @var \App\Models\Campaign $campaign
 * @var \App\Models\CampaignBoost $boost
 */
$boost = isset($boost) ? $boost : $campaign->boosts->first();
$buttons = [];
if (auth()->check()) {
    if (auth()->user()->hasBoosterNomenclature() && !$campaign->superboosted() && isset($boost) && auth()->user()->can('destroy', $boost)) {
        $buttons[] = '<a href="#" data-toggle="ajax-modal" data-target="#entity-modal" data-url="' . route('campaign_boosts.edit', [$boost]) . '" class="btn btn-block bg-boost text-white">
            <x-icon class="premium"></x-icon> ' . __('settings/boosters.superboost.title', ['campaign' => \Illuminate\Support\Str::limit($campaign->name, 25)]) . '</a>';
    }
    if (!$campaign->boosted()) {
        if (auth()->check() && auth()->user()->hasBoosterNomenclature()) {
        $buttons[] = '<a href="' . route('settings.boost', ['campaign' => $campaign->id]) .'" class="btn btn-block bg-boost text-white mb-5">
            <x-icon class="premium"></x-icon> ' . __('callouts.booster.actions.boost', ['campaign' => $campaign->name]) . '</a>';
        } else {
        $buttons[] = '<a href="' . route('settings.premium', ['campaign' => $campaign->id]) .'" class="btn btn-block bg-boost text-white mb-5">
            <x-icon class="premium"></x-icon> ' . __('settings/premium.actions.unlock') . '</a>';
        }
    }
    if (auth()->user()->can('update', $campaign)) {
        $buttons[] = '<a href="'. route('campaigns.edit') .'" class="btn btn-primary btn-block">
            <x-icon class="edit"></x-icon> '. __('campaigns.show.actions.edit') .'</a>';
    }
    if ($campaign->userIsMember()) {
    $buttons[] = '<button type="button" class="btn btn-warning btn-block" data-toggle="dialog" data-target="leave-confirm">
            <i class="fa-solid fa-sign-out-alt" aria-hidden="true"></i> ' . __('campaigns.show.actions.leave') . '
        </button>';
    }
    if (auth()->user()->can('roles', $campaign)) {
        $buttons[] = '<button type="button" class="btn btn-danger btn-block" data-toggle="dialog" data-target="campaign-delete-confirm">
            <x-icon class="trash"></x-icon> ' . __('campaigns.destroy.action') . '
        </button>';
    }
}
?>
@if (auth()->check() && !empty($buttons))
<div class="box box-solid">
    <div class="box-body box-profile">
        {!! implode("\n", $buttons) !!}
    </div>
</div>
@endif

    <div class="hidden lg:!block ">
        <div class="bg-box rounded overflow-hidden shadow-xs entity-submenu mb-5">
            <ul class="nav nav-pills nav-stacked p-0">
                <li class="@if(empty($active) || $active == 'campaign')active @endif">
                    <a href="{{ route('campaign') }}">
                        {{ __('crud.tabs.overview') }}
                    </a>
                </li>
                @can('update', $campaign)
                    <li class="@if(!empty($active) && $active == 'export')active @endif">
                        <a href="{{ route('campaign.export') }}">
                            {{ __('campaigns.show.tabs.export') }}
                        </a>
                    </li>
                @endif
                @can('update', $campaign)
                <li class="@if(!empty($active) && $active == 'recovery')active @endif">
                    <a href="{{ route('recovery') }}">
                        {{ __('campaigns.show.tabs.recovery') }}
                    </a>
                </li>
                @endcan
                @can('stats', $campaign)
                    <li class="@if(!empty($active) && $active == 'stats')active @endif">
                        <a href="{{ route('stats') }}">
                            {{ __('campaigns.show.tabs.achievements') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </div>

        @if (auth()->check() && (auth()->user()->can('members', $campaign) || auth()->user()->can('submissions', $campaign) || auth()->user()->can('roles', $campaign)))
            <div class="bg-box rounded overflow-hidden shadow-xs entity-submenu mb-5">
                <ul class="nav nav-pills nav-stacked p-0">
                    @can('members', $campaign)
                        <li class="@if(!empty($active) && $active == 'users')active @endif">
                            <a href="{{ route('campaign_users.index') }}">
                                {{ __('campaigns.show.tabs.members') }}
                            </a>
                        </li>
                    @endcan
                    @can('submissions', $campaign)
                        <li class="@if(!empty($active) && $active == 'submissions')active @endif">
                            <a href="{{ route('campaign_submissions.index') }}">
                                {{ __('campaigns.show.tabs.applications') }}
                                @if ($campaign->submissions()->count() > 0) <span class="label label-default pull-right">
                                            {{ $campaign->submissions()->count() }}
                                        </span>@endif
                            </a>
                        </li>
                    @endcan
                    @can('roles', $campaign)
                        <li class="@if(!empty($active) && $active == 'roles')active @endif">
                            <a href="{{ route('campaign_roles.index') }}">
                                {{ __('campaigns.show.tabs.roles') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
        @endif

        <div class="bg-box rounded overflow-hidden shadow-xs entity-submenu">
            <ul class="nav nav-pills nav-stacked p-0">
                @can('update', $campaign)
                <li class="@if(!empty($active) && $active == 'settings')active @endif">
                    <a href="{{ route('campaign.modules') }}">
                        {{ __('campaigns.show.tabs.settings') }}
                    </a>
                </li>
                @endcan
                @if(config('marketplace.enabled'))
                    <li class="@if (!empty($active) && $active == 'plugins')active @endif">
                        <a href="{{ route('campaign_plugins.index') }}">
                            {{ __('campaigns.show.tabs.plugins') }}
                        </a>
                    </li>
                @endif
                @can('update', $campaign)
                <li class="@if(!empty($active) && $active == 'default-images')active @endif">
                    <a href="{{ route('campaign.default-images') }}">
                        {{ __('campaigns.show.tabs.default-images') }}
                    </a>
                </li>
                <li class="@if(!empty($active) && $active == 'styles')active @endif">
                    <a href="{{ route('campaign_styles.index') }}">
                        {{ __('campaigns.show.tabs.styles') }}
                    </a>
                </li>
                <li class="@if(!empty($active) && $active == 'sidebar')active @endif">
                    <a href="{{ route('campaign-sidebar') }}">
                        {{ __('campaigns.show.tabs.sidebar') }}
                    </a>
                </li>
                @endcan
            </ul>
        </div>
    </div>

    @php
    $menuOptions = [];
    $menuOptions['campaign'] = [
        'label' => __('crud.tabs.overview'),
        'route' => route('campaign')
    ];
    if (auth()->check()) {
        if (auth()->user()->can('update', $campaign)) {
            $menuOptions['export'] = [
                    'label' => __('campaigns.show.tabs.export'),
                    'route' => route('campaign.export')
            ];
            $menuOptions['recovery'] = [
                    'label' => __('campaigns.show.tabs.recovery'),
                    'route' => route('recovery')
            ];
        }
        if (auth()->user()->can('stats', $campaign)) {
            $menuOptions['stats'] = [
                    'label' => __('campaigns.show.tabs.achievements'),
                    'route' => route('stats')
            ];
        }
        if (auth()->user()->can('members', $campaign)) {
            $menuOptions['users'] = [
                    'label' => __('campaigns.show.tabs.members'),
                    'route' => route('campaign_users.index')
            ];
        }
        if (auth()->user()->can('submissions', $campaign)) {
            $menuOptions['submissions'] = [
                    'label' => __('campaigns.show.tabs.applications'),
                    'route' => route('campaign_submissions.index')
            ];
        }
        if (auth()->user()->can('roles', $campaign)) {
            $menuOptions['roles'] = [
                    'label' => __('campaigns.show.tabs.roles'),
                    'route' => route('campaign_roles.index')
            ];
        }

        if (auth()->user()->can('update', $campaign)) {
            $menuOptions['settings'] = [
                'label' => __('campaigns.show.tabs.settings'),
                'route' => route('campaign.modules')
            ];
            $menuOptions['default-images'] = [
                'label' => __('campaigns.show.tabs.default-images'),
                'route' => route('campaign.default-images')
            ];
            $menuOptions['styles'] = [
                'label' => __('campaigns.show.tabs.styles'),
                'route' => route('campaign_styles.index')
            ];
            $menuOptions['sidebar'] = [
                'label' => __('campaigns.show.tabs.sidebar'),
                'route' => route('campaign-sidebar')
            ];
        }
    }

    if (config('marketplace.enabled')) {
        $menuOptions['plugins'] = [
            'label' => __('campaigns.show.tabs.plugins'),
            'route' => route('campaign_plugins.index')
        ];
    }
    @endphp
    <div class="lg:hidden" id="sm-a">
        <div class="form-group">
            <select name="menu-switcher" class="form-control submenu-switcher">
                @foreach ($menuOptions as $key => $option)
                    <option name="{{ $key }}" data-route="{{ $option['route'] }}" @if($key == $active) selected="selected" @endif>
                        {{ $option['label'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>


@section('modals')
    @parent

    @if (auth()->check() && $campaign->userIsMember())
        <x-dialog id="leave-confirm" :title="__('campaigns.leave.title')">
            @if(auth()->user()->can('leave', $campaign))
                <p class="">
                {!! __('campaigns.leave.confirm', ['name' => '<strong>' . $campaign->name . '</strong>']) !!}
                </p>
                <div class="grid grid-cols-2 gap-2 w-full">
                    <x-buttons.confirm type="ghost" full="true" dismiss="dialog">
                        {{ __('crud.cancel') }}
                    </x-buttons.confirm>
                    {!! Form::open(['method' => 'GET', 'route' => ['campaigns.leave', $campaign->id], 'class' => 'w-full']) !!}
                    <x-buttons.confirm type="danger" outline="true" full="true">
                        <i class="fa-solid fa-sign-out-alt" aria-hidden="true"></i>
                        {{ __('campaigns.leave.confirm-button') }}
                    </x-buttons.confirm>
                    {!! Form::close() !!}
                </div>
            @else
                <p class="mt-5">{{ __('campaigns.leave.no-admin-left') }}</p>
                <a href="{{ route('campaign_users.index') }}" class="btn btn-default px-8 rounded-full">
                    {{ __('campaigns.leave.fix') }}
                </a>
            @endif
        </x-dialog>
    </div>
    @endif

    @if (auth()->check() && auth()->user()->can('roles', $campaign))
        <x-dialog id="campaign-delete-confirm" :title="__('campaigns.destroy.title')">
            @if (auth()->user()->can('delete', $campaign))
                {!! Form::open(['method' => 'DELETE', 'route' => ['campaigns.destroy']]) !!}
                <p class="mt-5">{!! __('campaigns.destroy.confirm', ['campaign' => '<strong>' . $campaign->name . '</strong>']) !!}
                <p class="help-block"> {!! __('campaigns.destroy.hint', ['code' => '<code>delete</code>']) !!} </p>

                <div class="form-group required">
                    {!! Form::text('delete', null, ['class' => 'form-control', 'required', 'id' => 'campaign-delete-form']) !!}
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <x-buttons.confirm type="ghost" full="true" dismiss="dialog">
                        {{ __('crud.cancel') }}
                    </x-buttons.confirm>
                    {!! Form::open(['method' => 'GET', 'route' => ['campaigns.leave', $campaign->id], 'class' => 'w-full']) !!}
                    <x-buttons.confirm type="danger" outline="true" full="true">
                        <i class="fa-solid fa-sign-out-alt" aria-hidden="true"></i>
                        {{ __('campaigns.destroy.confirm-button') }}
                    </x-buttons.confirm>
                </div>
                {!! Form::close() !!}
            @else
                <div class="max-w-lg text-justify">
                    <p class="mt-5">{{ __('campaigns.destroy.helper-v2') }}</p>
                    <a href="{{ route('campaign_users.index') }}" class="py-2">
                        {{ __('campaigns.leave.fix') }}
                    </a>
                </div>
            @endif
        </x-dialog>
    @endif
@endsection
