@if($photoAlbums->isEmpty())
    <div class="row clearfix">
        <h3 class="text-warning">
            {!! trans('frontend.no_exists') !!}
            {!! trans('frontend.photos_galleries') !!}
            {!! trans('frontend.now') !!}
        </h3>
    </div>
@else
    <div class="row clearfix">
    @foreach($photoAlbums as $photoAlbum)
        <!-- Video Column -->
            <div class="video-column col-lg-4 col-md-4 col-sm-4">
                <div class="inner-column photos_gallery_box">
                    <!--Video Box-->

                    <a href="#" class="show_photo_gallery_modal" data-id="{!! $photoAlbum->id !!}">
                        <div class="video-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="video-image">
                                <img src="{!! asset(Storage::url($photoAlbum->main_photo)) !!}" alt=""
                                     style="height: 300px">
                            </figure>

                            <p>
                                <a href="#" class="show_photo_gallery_modal" data-id="{!! $photoAlbum->id !!}">
                                    {!! Lang()=='ar' ? $photoAlbum->title_ar : $photoAlbum->title_en  !!}
                                </a>
                            </p>
                        </div>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
@endif
<div class="clearfix"></div>
<!--Post Share Options-->
<div class="text-center">
    <ul class="clearfix">
        {{ $photoAlbums->links('vendor.pagination.bootstrap-4') }}
    </ul>
</div>
