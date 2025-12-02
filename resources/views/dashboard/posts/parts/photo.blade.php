@if (!empty($post->photo))
    <img src='{!! asset('/uploads/posts/' . $post->photo) !!}' width="80" height="80" class="img-fluid">
@else
    <img src='{!! asset('assets/dashbaord/images/images-empty.png') !!}' width="80" height="80" class="img-fluid">
@endif
