<?php

namespace App\Http\Controllers\Entity;

use App\Exceptions\TranslatableException;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovePostRequest;
use App\Models\Campaign;
use App\Models\Entity;
use App\Models\Post;
use App\Services\Entity\PostService;

class PostMoveController extends Controller
{
    protected PostService $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    /**
     */
    public function index(Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('update', $entity->child);

        return view('entities.pages.posts.move.index', compact(
            'entity',
            'post',
            'campaign',
        ));
    }

    /**
     */
    public function move(MovePostRequest $request, Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('update', $entity->child);
        /** @var Entity|null $newEntity */
        $newEntity = Entity::where(['id' => $request['entity']])->first();
        $this->authorize('update', $newEntity->child);
        try {
            //Check if the post has a layout and if said layout is compatible with the new entity
            if ($post->layout_id) {
                if ($post->layout->entity_type_id !== null && $post->layout->entity_type_id  != $newEntity->type_id) {
                    throw new TranslatableException(__('errors.post_layout'));
                }
            }
            $newPost = $this->service
                ->post($post)
                ->handle($request);
            $success = 'move_success';
            if (isset($request['copy'])) {
                $success = 'copy_success';
            }
            return redirect()
                ->route($newEntity->pluralType() . '.show', [$campaign, $newEntity->child->id, '#post-' . $newPost->id])
                ->with('success', __('entities/notes.move.' . $success, ['name' => $newPost->name,
                    'entity' => $newEntity->name
                ]));
        } catch (TranslatableException $ex) {
            return redirect()
                ->route($entity->pluralType() . '.show', [$campaign, $entity->child->id, '#post-' . $post->id])
                ->with('error', __($ex->getMessage(), ['name' => $entity->name]));
        }
    }
}
