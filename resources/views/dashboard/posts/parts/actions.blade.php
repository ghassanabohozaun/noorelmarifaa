<div class="form-group">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


        <a href="{{ route('dashboard.posts.photos', $post->id) }}" class="btn btn-sm btn-outline-primary"
            title="{!! __('general.post_photo') !!}">
            <i class="la la-plus"></i>
        </a>


        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary"
            title="{!! __('general.edit') !!}">
            <i class="la la-edit"></i>
        </a>


        <a href="#" class="btn btn-sm btn-outline-danger delete_post_btn" data-id="{!! $post->id !!}"
            title="{!! __('general.delete') !!}">
            <i class="la la-trash-o"></i>
        </a>

    </div>
</div>
