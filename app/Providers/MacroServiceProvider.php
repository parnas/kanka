<?php
/**
 * This class contains the custom macros that we can use in blade views.
 */
namespace App\Providers;

use App\Facades\EntityPermission;
use App\Models\Entity;
use App\Models\MiscModel;
use App\Services\Macros;
use Form;
use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Blade;

/**
 * Class MacroServiceProvider
 * @package App\Providers
 */
class MacroServiceProvider extends HtmlServiceProvider
{
    /**
     * Define our macros
     */
    public function boot()
    {
        Form::component('select2', 'components.form.select2', [
            'fieldId',
            'prefill' => null,
            'prefillModel' => null,
            'allowNew' => false,
            'labelKey' => null,
            'searchRouteName' => null,
            'placeholderKey' => null,
        ]);

        Form::component('tags', 'components.form.tags', [
            'fieldId',
            'options' => []
        ]);

        Form::component('rpg_systems', 'components.form.rpg_systems', [
            'fieldId',
            'options' => []
        ]);

        Form::component('members', 'components.form.members', [
            'fieldId',
            'options' => []
        ]);

        Form::component('entityType', 'components.form.entity_types', [
            'fieldId',
            'options' => []
        ]);

        // Not used yet.
        Form::component('private', 'components.form.private', [
            'fieldId',
        ]);

        $this->blade();

        /*Form::function($fieldId, $searchRouteName, $prefill = null, $placeholderKey = null) {

            $placeholderKey = empty($placeholderKey) ? 'crud.placeholders.' . trim($fieldId) : $placeholderKey;

            $selectedOption = [];
            if (!empty($prefill) && $prefill instanceof MiscModel) {
                $selectedOption = [$prefill->id => $prefill->name];
            } else {
                // Old?
            }

            return Form::select2(
                $fieldId,
                $selectedOption,
                [],
                [
                    'id' => $fieldId,
                    'class' => 'form-control select2',
                    'style' => 'width: 100%',
                    'data-url' => route($searchRouteName),
                    'data-placeholder' => trans($placeholderKey)
                ]
            );
        });*/
    }

    protected function blade()
    {
        // Role based directives
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->hasRole('admin');
        });
        Blade::if('translator', function () {
            return auth()->check() && auth()->user()->hasRole('translator');
        });
        Blade::if('moderator', function () {
            return auth()->check() && auth()->user()->hasRole('moderator');
        });

        // API directive for users in the API role
        Blade::if('api', function () {
            return auth()->check() && auth()->user()->hasRole('api');
        });

        // Permission to view an entity
        Blade::if('viewentity', function (Entity $entity) {
            return EntityPermission::canView($entity);
        });

//        Blade::if('campaigns', function () {
//            return auth()->check() && auth()->user()->hasCampaigns();
//        });
    }
}
