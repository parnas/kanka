@php
/**
 * @var \App\Models\MiscModel $model
 * @var \App\Models\Entity $entity
 * @var \App\Models\Post $post
 * @var \Illuminate\Database\Eloquent\Collection $pinnedPosts
 */
if (empty($entity)) {
    $entity = $model->entity;
}
$wrapper = false;
$entryShown = false;
if (!isset($pinnedPosts)) {
    $pinnedPosts = $entity->posts()->with(['permissions', 'location'])->ordered()->paginate(15);
    $wrapper = true;
}

$first = $pinnedPosts->first();
@endphp

@if(isset($withEntry) && ($pinnedPosts->count() === 0 || (!empty($first) && $first->position >= 0)))
    @include('entities.components.entry')
    @php $entryShown = true; @endphp
@endif


@if($wrapper)
<div class="entity-posts entity-notes">
@endif
    @foreach ($pinnedPosts as $post)
        @if (isset($withEntry) && !$entryShown && $post->position >= 0)
            @include('entities.components.entry')
            @php $entryShown = true @endphp
        @endif

        @include('entities.components._post')
    @endforeach


    @if (isset($withEntry) && !$entryShown)
        @include('entities.components.entry')
        @php $entryShown = true @endphp
    @endif

    @if ($pinnedPosts->currentPage() < $pinnedPosts->lastPage())
        <div class="text-center mb-5">
            @if (auth()->check())
            <a href="#" class="btn btn-default btn-sm story-load-more" data-url="{{ route('entities.story.load-more', [$entity, 'page' => $pinnedPosts->currentPage() + 1]) }}">
                <i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i> {{ __('entities/story.actions.load_more') }}
            </a>

            <i class="fa-solid fa-spinner fa-spin fa-2x" id="story-more-spinner" style="display: none"></i>
            @else
            <a href="{{ route('login') }}" class="btn btn-default btn-sm">
                {{ __('entities/story.actions.login_for_more') }}
            </a>

            @endif
        </div>
    @endif

@if($wrapper)
</div>
@endif

@if (!request()->ajax() && $entity && !$entity->isType([config('entities.ids.map'), config('entities.ids.timeline'), config('entities.ids.calendar')]))
@can('post', [$model, 'add'])
    <div class="mb-5 text-center row-add-note-button">
        <a href="{{ route('entities.posts.create', $entity) }}" class="btn btn-warning btn-sm btn-new-post"
           data-entity-type="post" data-toggle="tooltip" title="{{ __('crud.tooltips.new_post') }}">
            <x-icon class="plus"></x-icon>
            {{ __('crud.actions.new_post') }}
        </a>
    </div>
@endcan
@endif
