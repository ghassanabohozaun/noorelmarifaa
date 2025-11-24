<div class="row clearfix">
    @if ($posts->isEmpty())
        <h3 class="text-warning">{!! trans('frontend.no_exists') !!} {!! $title !!} {!! trans('frontend.now') !!}</h3>
    @else
        @foreach ($posts as $post)
            <!--Causes Block-->
            <div class="causes-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{!! route(
                            'category',
                            Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                        ) !!}">
                            <img style="height: 250px" src="{!! asset(Storage::url($post->photo)) !!}" alt="{!! asset(Storage::url($post->photo)) !!}"
                                title="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}" /></a>
                        <a href="javascript:void(0);" class="like-icon">
                            <span class="icon flaticon-heart"></span></a>
                    </div>
                    <div class="lower-content">
                        <h3>
                            <a href="{!! route(
                                'category',
                                Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                            ) !!}">
                                {!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}</a>
                        </h3>
                        <div class="btns-box">
                            <a href="{!! route(
                                'category',
                                Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                            ) !!}" class="theme-btn btn-style-three">
                                {!! trans('frontend.read_more') !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>


<br />
<!--Post Share Options-->
<div>
    <ul class="clearfix">
        {{ $posts->links() }}
    </ul>
</div>
