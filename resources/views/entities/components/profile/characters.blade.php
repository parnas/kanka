<?php /** @var \App\Models\Character $model */?>

@if (!$model->showProfileInfo())
    @php return @endphp
@endif

@php
//$appearances = $model->characterTraits()->appearance()->orderBy('default_order')->get();
//$traits = $model->characterTraits()->personality()->orderBy('default_order')->get();

@endphp
<div class="sidebar-section-box sidebar-section-profile">
    <div class="sidebar-section-title cursor" data-toggle="collapse" data-target="#sidebar-profile-elements">
        <i class="fa fa-chevron-right" style="display: none"></i>
        <i class="fa fa-chevron-down"></i>
        {{ __('crud.tabs.profile') }}
    </div>

    <div class="sidebar-elements collapse in" id="sidebar-profile-elements">
        @if ($campaign->enabled('families') && !empty($model->family))
            <div class="element profile-family">
                <div class="title">{{ __('characters.fields.family') }}</div>
                {!! $model->family->tooltipedLink() !!}
            </div>
        @endif

        @if (!$model->races->isEmpty() || $model->hasAge())
            @if (!$model->races->isEmpty() && !$model->hasAge())
            <div class="element profile-race">
                <div class="title">{{ __('characters.fields.races') }}</div>
                @foreach ($model->races as $race)
                {!! $race->tooltipedLink() !!}
                @endforeach
            </div>
            @elseif ($model->races->isEmpty() && $model->hasAge())
            <div class="element profile-age">
                <div class="title">{{ __('characters.fields.age') }}</div>
                <span>{{ $model->age }}</span>
            </div>
            @else
            <div class="element profile-race-age">
                <div class="title">{{ __('characters.fields.races') }}, {{ __('characters.fields.age') }}</div>
                @foreach ($model->races as $race)
                    {!! $race->tooltipedLink() !!}
                @endforeach
                <span>{{ $model->age }}</span>
            </div>
            @endif
        @endif


        @if (!empty($model->sex) || !empty($model->pronouns))
            @if (!empty($model->sex) && empty($model->pronouns))
                <div class="element profile-gender">
                    <div class="title">{{ __('characters.fields.sex') }}</div>
                    <span>{{ $model->sex }}</span>
                </div>
            @elseif (empty($model->sex) && !empty($model->pronouns))
                <div class="element profile-pronouns">
                    <div class="title">{{ __('characters.fields.pronouns') }}</div>
                    <span>{{ $model->pronouns }}</span>
                </div>
            @else
                <div class="element profile-gender-pronouns">
                    <div class="title">{{ __('characters.fields.sex') }}, {{ __('characters.fields.pronouns') }}</div>
                    <span>{{ $model->sex }}</span>
                    <span>{{ $model->pronouns }}</span>
                </div>
            @endif
        @endif

        @include('entities.components.profile._type')

    </div>
</div>