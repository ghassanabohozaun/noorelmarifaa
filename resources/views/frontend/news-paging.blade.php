@if ($posts->isEmpty())
    <h3 class="text-warning">{!! trans('frontend.no_exists') !!} {!! $title !!} {!! trans('frontend.now') !!}</h3>
@else
    @foreach ($posts as $post)
        <!-- News Block Four -->
        <div class="news-block-four">
            <div class="inner-box">
                <div class="image">
                    <a href="{!! route(
                        'new',
                        Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                    ) !!}">
                        <img style="height: 420px" src="{!! asset(Storage::url($post->photo)) !!}" alt="{!! asset(Storage::url($post->photo)) !!}"
                            title="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
                    </a>
                    <div class="read-more">
                        <a href="{!! route(
                            'new',
                            Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                        ) !!}" class="more">{!! trans('frontend.read_more') !!}</a>
                    </div>
                </div>
                <div class="lower-content">
                    <div class="content">
                        <div class="date-outer">
                            <?php $splitDate = explode('-', $post->post_added_date); ?>
                            <div class="date"><?php echo $splitDate[2]; ?></div>
                            @if (Lang() == 'ar')
                                <div class="month"><?php echo $splitDate[0] . '/' . $splitDate[1]; ?></div>
                            @else
                                <div class="month"><?php echo $splitDate[1] . '/' . $splitDate[0]; ?></div>
                            @endif
                        </div>
                        <h3>
                            <a href="{!! route(
                                'new',
                                Lang() == 'ar' ? str_replace(' ', '-', $post->post_title_ar) : str_replace(' ', '-', $post->post_title_en),
                            ) !!}">{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}</a>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines">
                                    </span>{!! trans('frontend.comments') !!}
                                    {!! App\Models\Comment::where('post_id', $post->id)->count() !!}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><span class="icon far fa-folder-open"></span>
                                    {!! Lang() == 'ar'
                                        ? App\Models\Department::where('id', $post->department_id)->first()->dep_name_ar
                                        : App\Models\Department::where('id', $post->department_id)->first()->dep_name_en !!}
                                </a>
                            </li>
                        </ul>
                        <div class="text">
                            {!! Lang() == 'ar' ? $post->post_summary_ar : $post->post_summary_en !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

<!--Post Share Options-->
<div class="text-center">
    <ul class="clearfix">
        {{ $posts->links() }}
    </ul>
</div>
