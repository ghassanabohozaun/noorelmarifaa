<div class="badge badge-sm {!! $type->status == 1 ? 'badge-success' : 'badge-danger' !!} sponership_type_status_{!! $type->id !!}">
    {!! $type->status == 1 ? __('general.enable') : __('general.disabled') !!}
</div>
