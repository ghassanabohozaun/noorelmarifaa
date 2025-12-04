<div class="form-group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

        {{-- edit --}}
        <a href="#" class="btn btn-sm btn-outline-primary copy_file_full_path" title="{!! __('general.copy') !!}"
            data-id="{!! $file->id !!}">
            <i class="la la-copy"></i>
        </a>

        {{-- delete --}}
        <a href="#" class="btn btn-sm btn-outline-danger delete_file_btn" data-id="{!! $file->id !!}">
            <i class="la la-trash"></i>
        </a>

    </div>
</div>
