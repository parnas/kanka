<button type="button" class="text-xl opacity-50 hover:opacity-100 focus:opacity-100 cursor-pointer text-decoration-none" data-dismiss="{{ $dismiss ?? 'modal' }}" aria-label="{{ __('crud.delete_modal.close') }}" onclick="this.closest('dialog').close('close')">
    <x-icon class="fa-regular fa-circle-xmark"></x-icon>
    <span class="sr-only">{{ __('crud.delete_modal.close') }}</span>
</button>
