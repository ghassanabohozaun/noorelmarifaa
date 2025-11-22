@if($videos->isEmpty())
    <div class="row clearfix">
        <h3 class="text-warning">{!! trans('frontend.no_exists') !!} {!! trans('frontend.videos') !!} {!! trans('frontend.now') !!}</h3>
    </div>
@else
    <div class="row clearfix my_video_div">
         @foreach($videos as $video)
        <!-- Video Column -->
            <div class="video-column col-lg-4 col-md-4 col-sm-4">
                <div class="inner-column videos_gallery_box" >
                    <!--Video Box-->
                    <div class="video-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="video-image">
                            <img src="http://img.youtube.com/vi/{{$video->link}}/0.jpg" alt="">
                        </figure>
                        <a href="https://www.youtube.com/embed/{{$video->link}}"
                           class="lightbox-image overlay-box"><span class="flaticon-play-button"><i
                                    class="ripple"></i></span></a>
                        <p>
                            <a href="https://www.youtube.com/embed/{{$video->link}}"
                               class="lightbox-image">
                                {!! Lang()=='ar' ? $video->title_ar : $video->title_en  !!}
                            </a>
                        </p>
                    </div>

                </div>
            </div>

        @endforeach
    </div>
@endif

<div class="clearfix"></div>
<!--Post Share Options-->
<div class="text-center">
    <ul class="clearfix">
        {{ $videos->links('vendor.pagination.bootstrap-4') }}
    </ul>
</div>
