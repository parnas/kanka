
<input type="hidden" name="author_id" value="" />
    @include('cruds.fields.entity', [
    'name' => 'author_id',
    'preset' => !empty($model) && $model->author ? $model->author : null,
    'relation' => 'author',
    'label' => __('journals.fields.author'),
])
