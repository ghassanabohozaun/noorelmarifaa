<div class="form-group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


        {{-- edit --}}
        <a href="#" class="btn btn-sm btn-outline-primary edit_organization_button" title="{!! __('general.edit') !!}"
            organization-id="{!! $organization->id !!}" organization-name-ar="{!! $organization->getTranslation('name', 'ar') !!}"
            organization-name-en="{!! $organization->getTranslation('name', 'en') !!}">
            <i class="la la-edit"></i>
        </a>

        {{-- delete --}}
        <a href="#" class="btn btn-sm btn-outline-danger delete_organization_btn"
            data-id="{!! $organization->id !!}">
            <i class="la la-trash"></i>
        </a>
    </div>
</div>
