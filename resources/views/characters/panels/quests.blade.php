<?php /** @var \App\Models\Character $model */?>
<div class="box box-solid" id="character-quests">
    <div class="box-body">
        <h2 class="page-header ">
            {{ __('characters.show.tabs.quests') }}
        </h2>

        @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#character-quests'])

        <?php  $r = $model->questGiver()->with(['characters', 'locations', 'quests'])->paginate(); ?>
        @if ($r->count() > 0)
            <p class="help-block">{{ __('characters.quests.helpers.quest_giver') }}</p>
            @include('characters.panels._quest', ['role' => false])
        @endif

        <?php  $r = $model->relatedQuests()->simpleSort($datagridSorter)->paginate(); ?>
        @if ($r->count() > 0)
            <p class="help-block">{{ __('characters.quests.helpers.quest_member') }}</p>
            @include('characters.panels._quest', ['role' => true])
        @endif
    </div>
</div>
