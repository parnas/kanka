<?php

namespace App\Datagrids\Filters;

use App\Models\Ability;

class AbilityFilter extends DatagridFilter
{
    /**
     * Filters available for abilities
     */
    public function __construct()
    {
        $this
            ->add('name')
            ->add('type')
            ->add([
                'field' => 'ability_id',
                'label' => __('crud.fields.parent'),
                'type' => 'select2',
                'route' => route('abilities.find'),
                'placeholder' =>  __('crud.placeholders.parent'),
                'model' => Ability::class,
            ])
            ->isPrivate()
            ->template()
            ->hasImage()
            ->hasPosts()
            ->hasEntityFiles()
            ->hasAttributes()
            ->tags()
            ->attributes()
        ;
    }
}
