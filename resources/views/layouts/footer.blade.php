<footer id="footer" class="main-footer px-4 py-10">
    @ads('rich')
    <div class="vm-placement" data-id="{{ config('tracking.venatus.inline') }}"></div>
    <div class="vm-placement" data-id="{{ config('tracking.venatus.rich') }}" style="display:none"></div>
    @endads

    <div class="lg:max-w-7xl lg:mx-auto">
        <div class="flex flex-col gap-10">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5">
                <div class="flex-col gap-8 hidden lg:flex col-span-2 ">
                    <a href="{{ route('home') }}" class="logo">
                        @include('icons.kanka-svg')
                    </a>

                    <div class="flex items-center gap-5 text-3xl flex-wrap">
                        @include('layouts._socials')
                    </div>

                    @include('layouts._lang-switcher')

                    <div class="text-xs">
                        Kanka v{{ config('app.version') }} - {!! __('footer.copyright', ['copy' => '&copy;', 'year' => date('Y'), 'company' => 'Owlchester SNC'])!!}  - {{ __('footer.server_time', ['time' => \Carbon\Carbon::now()->isoFormat('MMMM Do YYYY, h:mm a')]) }} ({{ gethostname() }})
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-sm">
                    <span class="block text-nav uppercase">{{ __('footer.platform') }}</span>
                    <a href="{{ Domain::toFront('features') }}">{{ __('footer.features') }}</a>
                    <a href="{{ Domain::toFront('premium') }}">{{ __('footer.premium') }}</a>
                    <a href="{{ Domain::toFront('pricing') }}">{{ __('footer.pricing') }}</a>
                    <a href="https://marketplace.kanka.io" target="_blank">{{ __('footer.marketplace') }}</a>
                </div>

                <div class="flex flex-col gap-3 text-sm">
                    <span class="block text-nav uppercase">{{ __('footer.resources') }}</span>
                    <a href="{{ Domain::toFront('kb') }}">{{ __('footer.kb') }}</a>
                    <a href="https://docs.kanka.io/en/latest/index.html" target="_blank">{{ __('footer.documentation') }}</a>
                    <a href="{{ route('larecipe.index') }}" target="_blank">{{ __('front.features.api.link') }}</a>
                    <a href="https://blog.kanka.io/category/news/" target="_blank">{{ __('footer.whats-new') }}</a>
                    <a href="https://blog.kanka.io" target="_blank">{{ __('footer.blog') }}</a>
                    <a href="https://status.kanka.io" target="_blank">{{ __('footer.status') }}</a>
                    <a href="{{ Domain::toFront('newsletter') }}">{{ __('footer.newsletter') }}</a>
                </div>

                <div class="flex flex-col gap-3 text-sm">
                    <span class="block text-nav uppercase">{{ __('footer.community') }}</span>
                    <a href="{{ Domain::toFront('campaigns') }}">{{ __('footer.public-campaigns') }}</a>
                    <a href="{{ Domain::toFront('community-votes') }}">{{ __('front/community-votes.title') }}</a>
                    <a href="{{ Domain::toFront('hall-of-fame') }}">{{ __('front/hall-of-fame.title') }}</a>
                </div>

                <div class="flex flex-col gap-3 text-sm">
                    <span class="block text-nav uppercase">{{ __('footer.company') }}</span>
                    <a href="{{ Domain::toFront('about') }}">{{ __('footer.about') }}</a>
                    <a href="{{ Domain::toFront('contact') }}">{{ __('footer.contact') }}</a>
                    <a href="{{ Domain::toFront('press-kit') }}">{{ __('footer.press-kit') }}</a>
                    <a href="{{ Domain::toFront('security') }}">{{ __('footer.security') }}</a>
                    <a href="{{ Domain::toFront('privacy-policy') }}">{{ __('footer.privacy') }}</a>
                    <a href="{{ Domain::toFront('terms-and-conditions') }}">{{ __('footer.terms') }}</a>
                </div>
            </div>
            <div class="lg:hidden flex flex-col gap-5 text-center">
                <div class="logo text-center">
                    <div class="inline-block">
                        @include('icons.kanka-svg')
                    </div>
                </div>

                <div class="flex justify-center gap-5 text-3xl">
                    @include('layouts._socials')
                </div>

                @include('layouts._lang-switcher')

                <div class="text-center text-sm">
                    Kanka v{{ config('app.version') }} - {!! __('footer.copyright', ['copy' => '&copy;', 'year' => date('Y'), 'company' => 'Owlchester SNC'])!!} - {{ __('footer.server_time', ['time' => \Carbon\Carbon::now()->isoFormat('MMMM Do YYYY, h:mm a')]) }} ({{ gethostname() }})
                </div>
            </div>
        </div>
    </div>
</footer>

<x-dialog id="language-select-modal" :title="__('footer.language-switcher.title')">
    <div class="grid grid-cols-2 gap-4">
        <ul class="list-none p-0 m-0">
            <li class="py-2">
                <a rel="alternate" hreflang="en-US" href="{{ url()->full() . '?lang=en-US' }}">
                    US English
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="en" href="{{ url()->full() . '?lang=en' }}">
                    UK English
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="pt-BR" href="{{ url()->full() . '?lang=pt-BR' }}">
                    Português do Brasil
                </a>
            </li>
        </ul>
        <ul class="list-none p-0 m-0">
            <li class="py-2">
                <a rel="alternate" hreflang="de" href="{{ url()->full() . '?lang=de' }}">
                    Deutsch
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="fr" href="{{ url()->full() . '?lang=fr' }}">
                    Français
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="es" href="{{ url()->full() . '?lang=es' }}">
                    Español
                </a>
            </li>
        </ul>
    </div>
    <div class="text-left w-full">
        {{ __('footer.language-switcher.other') }}
    </div>
    <div class="w-full">
        <div class="grid grid-cols-2 gap-4">
            <ul class="list-none p-0 m-0">
                <li class="py-2">
                    <a rel="alternate" hreflang="it" href="{{ url()->full() . '?lang=it' }}">
                        Italiano
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="pl" href="{{ url()->full() . '?lang=pl' }}">
                        Polska
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="ru" href="{{ url()->full() . '?lang=ru' }}">
                        Pусский
                    </a>
                </li>
            </ul>
            <ul class="list-none p-0 m-0">
                <li class="py-2">
                    <a rel="alternate" hreflang="nl" href="{{ url()->full() . '?lang=nl' }}">
                        Nederlands
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="sk" href="{{ url()->full() . '?lang=sk' }}">
                        Slovenský
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-dialog>
