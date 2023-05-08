<div class="preview-v2">
    <div class="image rounded h-28 cover-background relative inline-block w-full " style="background-image: url('{{ $image }}')" title="{{ $title }}">
        @if (isset($target) && !empty($target))
        <a href="#" class="img-delete text-center absolute bottom-0 block w-full p-2 overflow-hidden text-white bg-red-900/50 hover:bg-red-900/90 " data-target="{{ $target }}" title="{{ __('crud.remove') }}">
            <x-icon class="trash"></x-icon> {{ __('crud.remove') }}
        </a>
        @endif
    </div>
</div>
