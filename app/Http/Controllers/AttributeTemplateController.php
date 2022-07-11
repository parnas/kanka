<?php

namespace App\Http\Controllers;

use App\Datagrids\Actions\AttributeTemplateDatagrid;
use App\Datagrids\Filters\AttributeTemplateFilter;
use App\Models\AttributeTemplate;
use App\Http\Requests\StoreAttributeTemplate;

class AttributeTemplateController extends CrudController
{
    /**
     * @var string
     */
    protected $view = 'attribute_templates';
    protected $route = 'attribute_templates';

    /**
     * @var string
     */
    protected $model = \App\Models\AttributeTemplate::class;

    /** @var string */
    protected $filter = AttributeTemplateFilter::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeTemplate $request)
    {
        return $this->crudStore($request, true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeTemplate  $attributeTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeTemplate $attributeTemplate)
    {
        return $this->crudShow($attributeTemplate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeTemplate  $attributeTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeTemplate $attributeTemplate)
    {
        return $this->crudEdit($attributeTemplate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributeTemplate  $attributeTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAttributeTemplate $request, AttributeTemplate $attributeTemplate)
    {
        return $this->crudUpdate($request, $attributeTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeTemplate  $attributeTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeTemplate $attributeTemplate)
    {
        return $this->crudDestroy($attributeTemplate);
    }
}
