<div class="quick-creator-header mt-8 pb-4 mb-4">
    <div class="flex gap-1">
        <div class="flex-grow">
            <div class="qq-mode text-sm mb-2 text-uppercase">
                @if ($mode === 'bulk')
                    {{ __('entities.creator.modes.bulk') }}
                @elseif ($mode === 'templates')
                    {{ __('entities.creator.modes.templates') }}
                @else
                    {{ __('entities.creator.modes.default') }}
                @endif
            </div>
            @if (empty($target))
                <div class="dropdown">
                    <div role="button" class="text-2xl dropdown-toggle text-2xl" data-toggle="dropdown" aria-expanded="false">
                        {!! $newLabel !!}
                        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    <ul class="dropdown-menu" role="menu">
                        @foreach ($orderedEntityTypes as $module => $name)
                            @includeWhen(isset($entities[$module]), 'entities.creator.header._dropdown', ['dropType' => $module, 'trans' => $name])
                        @endforeach

                        <li class="divider"></li>
                        <li>
                            <a href="#" class="" data-toggle="entity-creator" data-url="{{ route('entity-creator.selection') }}" data-entity-type="return">
                                <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                                {{ __('entities.creator.back') }}
                            </a>
                        </li>
                    </ul>
                </div>
            @else
                <div>
                    <div class="text-2xl text-2xl">
                        {!! $newLabel !!}
                    </div>
                </div>
            @endif
        </div>
        @if (empty($target))
            <div class="qq-toggles flex text-right items-center content-center justify-end">
                <div class="qq-mode-toggle pointer inline-block text-center rounded @if (empty($mode)) active @endif" data-mode="single" data-url="{{ route('entity-creator.form', ['type' => $type]) }}" aria-label="{{ __('entities.creator.modes.default') }}" title="{{ __('entities.creator.modes.default') }}" data-toggle="tooltip">
                    <x-icon class="fa-regular fa-user"></x-icon>
                </div>
                @if ($type !== 'posts')
                    <div class="qq-mode-toggle pointer inline-block text-center rounded @if ($mode == 'bulk') active @endif" data-mode="bulk" data-url="{{ route('entity-creator.form', ['type' => $type, 'mode' => 'bulk']) }}" aria-label="{{ __('entities.creator.modes.bulk') }}" title="{{ __('entities.creator.modes.bulk') }}" data-toggle="tooltip">
                        <x-icon class="fa-solid fa-users"></x-icon>
                    </div>
                    <div class="qq-mode-toggle pointer inline-block text-center rounded @if ($mode == 'templates') active @endif" data-mode="templates" data-url="{{ route('entity-creator.form', ['type' => $type, 'mode' => 'templates']) }}" aria-label="{{ __('entities.creator.modes.templates') }}" title="{{ __('entities.creator.modes.templates') }}" data-toggle="tooltip">
                        <x-icon class="fa-solid fa-address-book"></x-icon>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
