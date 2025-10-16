<div class="form-group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

        {{-- edit --}}
        <a href="{!! route('dashboard.children.edit', $child->id) !!}" class="btn btn-sm btn-outline-primary" title="{!! __('general.edit') !!}">
            <i class="la la-edit"></i>
        </a>
        {{-- show --}}
        <a href="{!! route('dashboard.children.show', $child->id) !!}" class="btn btn-sm btn-outline-success" title="{!! __('general.show') !!}">
            <i class="la la-eye"></i>
        </a>

        {{-- download pdf --}}
        <a href="{!! route('dashboard.children.download.pdf', $child->id) !!}" target="_blank" class="btn btn-sm btn-outline-primary"
            title="{!! __('general.download') !!}">
            <i class="la la-file-pdf-o"></i>
        </a>

        {{-- delete --}}
        <button class="btn btn-sm btn-outline-danger delete_child_btn" title="{!! __('general.delete') !!}"
            data-id="{!! $child->id !!}">
            <i class="la la-trash"></i>
        </button>

    </div>
</div>
