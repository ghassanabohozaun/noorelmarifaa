@if (!empty($page->photo))
    <img src='{!! asset('/uploads/pages/' . $page->photo) !!}' width="60" height="60" class="img-fluid">
@else
    <img src='{!! asset('assets/dashbaord/images/images-empty.png') !!}' width="60" height="60" class="img-fluid">
@endif
