<?php /** @var \App\Models\Image $image */
$imageCount = 0;
?>
<div class="modal-header">
    <x-dialog.close :modal="true"  />
    <h4 class="modal-title" id="myModalLabel">{!! $image->name !!}</h4>
</div>
<div class="modal-body gallery-image-edit">
    <div class="gallery-toggle collapse !visible in">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="">
                @if($image->isFolder())
                    <div class="text-center my-5">
                        <x-icon class="fa-solid fa-folder fa-4x"></x-icon>
                    </div>
                @else

                @if ($image->isFont())
                    <div class="help-block">This file is a font file.</div>
                @else
                    <div class="text-center">
                        <img src="{{ $image->getUrl(192, 144) }}" class="max-w-full rounded" alt="{{ $image->name }}" />
                    </div>
                @endif
                @if (!$image->isFont())
                    <div class="mt-2">
                        <a href="#" class="btn2 btn-sm" data-toggle="collapse" data-target=".gallery-toggle">{{ __('campaigns/gallery.actions.focus_point') }}</a>
                    </div>
                @endif

                <hr />

                <div class="grid grid-cols-1 gap-5">
                    @if (!$image->isFont())
                        <p class="{{ $image->inEntitiesCount() === 0 ? 'text-muted' : '' }} m-0">
                            {{ trans_choice('campaigns/gallery.fields.image_used_in', $image->inEntitiesCount(), ['count' => $image->inEntitiesCount()]) }}
                        </p>
                        @if($image->inEntitiesCount() > 0)
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($image->inEntities() as $entity)
                                    <a href="{{ $entity->url() }}">{{ $entity->name }}</a>
                                @endforeach
                            </div>
                        @endif
                    @endif

                    @if($image->mentions->count() > 0)
                    <p class="{{ $image->mentions->count() === 0 ? 'text-muted' : '' }} m-0">
                        {{ trans_choice('campaigns/gallery.fields.image_mentioned_in', $image->mentions->count(), ['count' => $image->mentions->count()]) }}
                    </p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach($image->mentions as $mention)
                            @if($mention->isPost())
                                <a href="{{ $mention->entity->url() }}?#post-{{ $mention->post_id }}"> {{ $mention->post->name }}</a>
                            @else
                                <a href="{{ $mention->entity->url() }}">{{ $mention->entity->name }}</a>
                            @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            @endif
            </div>
            <div class="">
                <div class="flex gap-2 items-center mb-5">
                    @if(!$image->isFolder())
                        <x-badge :title="__('campaigns/gallery.fields.ext')">
                            <x-icon class="fa-regular fa-image"></x-icon>
                            {{ strtoupper($image->ext) }}
                        </x-badge>
                        <x-badge :title="__('campaigns/gallery.fields.size')">
                            <x-icon class="fa-regular fa-weight-hanging"></x-icon>
                            {{ $image->niceSize() }}
                        </x-badge>
                    @endif
                    <x-badge :title="__('campaigns/gallery.fields.created_by')">
                        <x-icon class="fa-regular fa-user"></x-icon>
                        {{ $image->user ? $image->user->name : __('crud.users.unknown') }}
                    </x-badge>
                </div>

                {!! Form::model($image, ['route' => ['images.update', $campaign, $image], 'method' => 'PUT', 'class' => 'flex flex-col gap-5']) !!}

                <x-forms.field field="name" :label="__('crud.fields.name')" :required="true">
                    {!! Form::text('name', null, ['maxlength' => 45, 'class' => 'form-control']) !!}
                </x-forms.field>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-5">
                @if(!$image->isFolder())
                    <x-forms.field field="folder" :label="__('campaigns/gallery.fields.folder')">
                        {!! Form::select('folder_id', $folders, null, ['class' => 'form-control']) !!}
                    </x-forms.field>
                @endif

                @include('cruds.fields.visibility_id', ['model' => $image])
            </div>

            <div class="flex gap-2 sm:gap-5 items-center my-5">
                <div class="grow flex gap-2 sm:gap-5 items-center">
                @if(!$image->isFolder() || $image->hasNoFolders())
                    <x-button.delete-confirm target="#delete-confirm-form" size="sm" />
                @endif
                    @if(!$image->isFolder())
                        <a href="{{ Storage::url($image->path) }}" target="_blank">
                            <x-icon class="fa-regular fa-link"></x-icon>
                            {{ __('campaigns/gallery.actions.' . $image->isFont() ? 'file-link' : 'image-link') }}
                        </a>
                    @endif
                </div>

                <div class="">
                    <input type="submit" class="btn2 btn-primary btn-sm" value="{{ __('campaigns/gallery.actions.save') }}">
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <div class="gallery-toggle collapse !visible">
        <div class="gallery-image-edit">
            <p class="help-block">{{ __('entities/image.focus.helper') }}</p>
            <div class="focus-selector max-h-96 relative mb-2 overflow-auto">
                <div class="focus absolute text-white cursor-pointer text-3xl" style="@if(empty($image->focus_x))display: none; @else left: {{ $image->focus_x }}px; top: {{ $image->focus_y }}px; @endif">
                    <x-icon class="fa-regular fa-bullseye fa-2x hover:text-red" />
                </div>
                <img class="focus-image max-w-none" src="{{ $image->getImagePath(0) }}" alt="img" />
            </div>
            <div class="grid grid-cols-2 gap-2 w-full items-center mb-5">
                <div>
                    {!! Form::model($image, ['route' => ['campaign.gallery.save-focus', $campaign, $image], 'method' => 'POST']) !!}
                        <input type="submit" class="btn2 btn-error btn-outline btn-sm" value="{{ __('campaigns/gallery.actions.reset_focus') }}">
                    {!! Form::close() !!}
                </div>
                <div class="text-right">
                {!! Form::model($image, ['route' => ['campaign.gallery.save-focus', $campaign, $image], 'method' => 'POST']) !!}
                    {!! Form::hidden('focus_x', null) !!}
                    {!! Form::hidden('focus_y', null) !!}
                    <input type="submit" class="btn2 btn-primary btn-sm" value="{{ __('entities/image.actions.save_focus') }}">
                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

</div>

@if(!$image->isFolder() || $image->hasNoFolders())
    {!! Form::open(['method' => 'DELETE','route' => ['images.destroy', $campaign, $image->id], 'style'=>'display:inline', 'id' => 'delete-confirm-form']) !!}
    {!! Form::close() !!}
@endif
