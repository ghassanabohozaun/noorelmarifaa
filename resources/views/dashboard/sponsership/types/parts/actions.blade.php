<div class="form-group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


        {{-- edit --}}
        <a href="#" class="btn btn-sm btn-outline-primary edit_type_button" title="{!! __('general.edit') !!}"
            type-id="{!! $type->id !!}" type-name-ar="{!! $type->getTranslation('name', 'ar') !!}"
            type-name-en="{!! $type->getTranslation('name', 'en') !!}">
            <i class="la la-edit"></i>
        </a>

        {{-- delete --}}
        <a href="#" class="btn btn-sm btn-outline-danger delete_type_btn" data-id="{!! $type->id !!}">
            <i class="la la-trash"></i>
        </a>
    </div>
</div>
