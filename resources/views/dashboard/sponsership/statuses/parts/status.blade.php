<div class="badge badge-sm {!! $status->status == 1 ? 'badge-success' : 'badge-danger' !!} sponership_status_status_{!! $status->id !!}">
    {!! $status->status == 1 ? __('general.enable') : __('general.disabled') !!}
</div>
