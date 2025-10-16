<div class="badge badge-sm {!! $organization->status == 1 ? 'badge-success' : 'badge-danger' !!} sponership_organization_status_{!! $organization->id !!}">
    {!! $organization->status == 1 ? __('general.enable') : __('general.disabled') !!}
</div>
