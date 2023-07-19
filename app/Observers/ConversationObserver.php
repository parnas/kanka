<?php

namespace App\Observers;

use App\Models\Conversation;

class ConversationObserver extends MiscObserver
{
    /**
     * @param Conversation $model
     */
    public function updating(Conversation $model)
    {
        // Changed the target? Remove participants.
        if ($model->isDirty('target')) {
            $model->participants()->delete();
        }
    }
}
