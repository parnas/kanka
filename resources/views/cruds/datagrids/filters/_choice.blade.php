<select class="filter-select form-control entity-list-filter" id="{{ $field }}" name="{{ $field }}">
    <option value=""></option>
    <option value="0" @if ($filterService->filterValue($field) === '0') selected="selected" @endif>{{ __('voyager.generic.no') }}</option>
    <option value="1"  @if ($filterService->filterValue($field) === '1') selected="selected" @endif>{{ __('voyager.generic.yes') }}</option>
</select>