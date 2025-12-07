@extends('layouts.frontend')
@section('title')
    {!! $title !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta property="og:title" content="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta property="og:type" content="{!! trans('frontend.news_activity') !!}">
    <meta property="og:image" content="{!! asset(Storage::url($post->photo)) !!}">
    <meta property="og:url" content="{{ url('/') . '/' . Lang() . '/new' . '/' }}{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta property="og:site_name" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}">
    <meta property="og:description"
        content="@if (Lang() == 'ar') {!! \Illuminate\Support\Str::limit(strip_tags($post->post_details_ar), $limit = 120, $end = '...') !!}@else{!! \Illuminate\Support\Str::limit(strip_tags($post->post_details_en), $limit = 120, $end = '...') !!} @endif">
    <meta name="twitter:card" content="{!! trans('frontend.news_activity') !!}">
    <meta name="twitter:url" content="{{ url('/') . '/' . Lang() . '/new' . '/' }}{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta name="twitter:title" content="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}">
    <meta name="twitter:description"
        content="@if (Lang() == 'ar') {!! \Illuminate\Support\Str::limit(strip_tags($post->post_details_ar), $limit = 120, $end = '...') !!}@else {!! \Illuminate\Support\Str::limit(strip_tags($post->post_details_en), $limit = 120, $end = '...') !!} @endif">
    <meta name="twitter:image" content="{!! asset(Storage::url($post->photo)) !!}">
    <meta name="twitter:site" content="@NoorElMarifa">
    <meta name="twitter:creator" content="@NoorElMarifa">
    <meta name="publish-date" content="{!! $post->post_added_date !!}">
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/6.jpg') !!});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <h1>{!! $title !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="news-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{!! asset('uploads/posts/' . $post->photo) !!}" alt="{!! asset('uploads/posts/' . $post->photo) !!}"
                                    title="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}" />
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
                                    <ul class="post-meta">
                                        <li>
                                            <span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines">
                                            </span>{!! trans('frontend.comments') !!}
                                            {!! App\Models\Comment::where('post_id', $post->id)->count() !!}

                                        </li>
                                        <li><span class="icon far fa-folder-open"></span>
                                            {!! Lang() == 'ar'
                                                ? App\Models\Department::where('id', $post->department_id)->first()->dep_name_ar
                                                : App\Models\Department::where('id', $post->department_id)->first()->dep_name_en !!}
                                        </li>
                                    </ul>

                                    <h3>{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}</h3>
                                    <div class="text my_lead">
                                        <p>
                                            {!! Lang() == 'ar'
                                                ? strip_tags(htmlspecialchars_decode($post->post_details_ar))
                                                : strip_tags(htmlspecialchars_decode($post->post_details_en)) !!}
                                        </p>
                                    </div>



                                    @foreach ($post->files() as $file)
                                        <h1>111</h1>
                                    @endforeach

                                    {{-- <div class="image">
                                        <img src="{!! asset('uploads/posts/' . $post->photo) !!}" alt="{!! asset('uploads/posts/' . $post->photo) !!}"
                                            title="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}" />
                                    </div> --}}



                                    <!--Social Box-->
                                    <ul class="social-box">
                                        <li class="share">{!! trans('frontend.sharing') !!} :</li>
                                        <li><a href="https://facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                                target="-_blank">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}"
                                                target="-_blank">
                                                <span class="fab fa-linkedin-in"></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="http://pinterest.com/pin/create/button/?url={{ Request::url() }}"
                                                target="-_blank">
                                                <span class="fab fa-pinterest"></span>
                                            </a>

                                        </li>

                                        <li><a href="https://twitter.com/share?url={{ Request::url() }}&text=Project"
                                                target="-_blank">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!--Comments Area-->
                    <div class="comments-area">

                        <div class="sec-title">
                            <h2><span class="theme_color">{!! trans('frontend.comments') !!}</span>
                                {!! $comments->count() !!}
                            </h2>
                        </div>

                        @forelse($comments as $comment)
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="{!! asset('frontend/images/Person-Icon.png') !!}" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <strong>{!! $comment->person_name !!}</strong>
                                            <div class="comment-time">{!! $comment->created_at !!}</div>
                                        </div>
                                        <div class="text my_lead">
                                            {!! $comment->commentary !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4 class="text-warning">{!! trans('frontend.no_comments_exists') !!}</h4>
                        @endforelse
                    </div>
                    <!--End Comments Area-->

                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="sec-title">
                            <h2>
                                <span class="theme_color">
                                    {!! trans('frontend.Leave') !!}
                                </span>
                                {!! trans('frontend.comment') !!}
                            </h2>
                        </div>

                        <!-- Faq Form -->
                        <div class="default-form style-two">
                            <!--Faq Form-->
                            <form method="POST" action="{!! route('add.comment') !!}" id="add_comment_form">
                                @csrf
                                <div class="row clearfix">

                                    <div class="d-none col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="status" id="status" value="0">
                                    </div>

                                    <div class="d-none col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="person_ip" id="person_ip"
                                            value="{{ request()->ip() }}">
                                    </div>

                                    <div class="d-none col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="post_id" id="post_id" value="{{ $post->id }}">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="person_name" id="person_name" autocomplete="off"
                                            placeholder="{!! trans('frontend.your_name') !!}">
                                        <span class="form-text text-danger" id="person_name_error">
                                        </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="person_email" id="person_email" autocomplete="off"
                                            placeholder="{!! trans('frontend.your_email') !!}">
                                        <span class="form-text text-danger" id="person_email_error">
                                        </span>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="commentary" id="commentary" autocomplete="off" placeholder="{!! trans('frontend.your_comment') !!}"></textarea>
                                        <span class="form-text text-danger" id="commentary_error">
                                        </span>
                                    </div>
                                    <style>

                                    </style>

                                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                        {!! NoCaptcha::display() !!}

                                        <span class="form-text text-danger" id="g-recaptcha-response_error">
                                        </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form">
                                            {!! trans('frontend.add_comment') !!}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--End Faq Form -->

                    </div>
                    <!-- Comment Form -->

                </div>


                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!--Category Blog-->
                        <div class="sidebar-widget categories-blog">
                            <div class="sidebar-title">
                                <h2>{!! trans('frontend.categories') !!}</h2>
                            </div>

                            <ul>
                                @php
                                    $postDepartments = App\Models\Department::active()->get();
                                @endphp
                                @foreach ($postDepartments as $postDepartment)
                                    <li>
                                        <a href="{!! route('posts', str_replace(' ', '-', $postDepartment->slug)) !!}">
                                            {!! $postDepartment->name !!}
                                            <span>
                                                {!! App\Models\Post::where('department_id', $postDepartment->id)->count() !!}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h2>{!! trans('frontend.last_news') !!}</h2>
                            </div>
                            <div class="widget-content">
                                @forelse($lastPosts as $lastPost)
                                    <article class="post">
                                        <figure class="post-thumb">
                                            <a href="{!! route(
                                                'post',
                                                Lang() == 'ar' ? str_replace(' ', '-', $lastPost->post_title_ar) : str_replace(' ', '-', $lastPost->post_title_en),
                                            ) !!}">
                                                <img style="height: 90px" src="{!! asset('uploads/posts/' . $lastPost->photo) !!}"
                                                    alt="{!! asset(Storage::url($lastPost->photo)) !!}" title="{!! Lang() == 'ar' ? $lastPost->post_title_ar : $lastPost->post_title_en !!}">
                                            </a>
                                        </figure>
                                        <div class="text">
                                            <a href="{!! route(
                                                'post',
                                                Lang() == 'ar' ? str_replace(' ', '-', $lastPost->post_title_ar) : str_replace(' ', '-', $lastPost->post_title_en),
                                            ) !!}">
                                                {!! Lang() == 'ar' ? $lastPost->post_title_ar : $lastPost->post_title_en !!}
                                            </a>
                                        </div>
                                        <div class="post-info">{!! $lastPost->post_added_date !!}</div>
                                    </article>
                                @empty
                                    <h5 class="text-warning">{!! trans('frontend.no_exists') !!} {!! $title !!}
                                        {!! trans('frontend.now') !!}</h5>
                                @endforelse
                            </div>
                        </div>

                        <!-- Help Widget -->
                        @if (setting()->mobile)
                            <div class="sidebar-widget help-widget">
                                <div class="sidebar-title">
                                    <h2>{!! trans('frontend.need_help') !!}</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="text">
                                        {!! trans('frontend.if_you_have_any_question_please_dont_hesitate_to_contact_us') !!}
                                    </div>
                                    <ul class="list">
                                        <li>
                                            <span class="icon fas fa-phone-volume"></span>
                                            <a href="tel:{!! setting()->mobile !!}"> {!! setting()->mobile !!}</a>
                                        </li>
                                        <li>
                                            <span class="icon fas fa-envelope"></span>
                                            <a href="mailto:{!! setting()->email !!}">{!! setting()->email !!}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    {!! NoCaptcha::renderJs() !!}

    <script type="text/javascript">
        var RecaptchaOptions = {
            theme: 'theme_name'
        };
        $('#add_comment_form').on('submit', function(e) {
            e.preventDefault();

            ////////////////////////////////////////////////////////////////////
            $('#person_name').css('border-color', '');
            $('#person_email').css('border-color', '');
            $('#commentary').css('border-color', '');

            $('#person_name_error').text('')
            $('#person_email_error').text('')
            $('#commentary_error').text('')
            $('#g-recaptcha-response_error').text('')
            ////////////////////////////////////////////////////////////////////


            var data = new FormData(this);
            var url = $(this).attr('action');
            var type = $(this).attr('method');

            $.ajax({
                url: url,
                type: type,
                data: data,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        swal({
                            icon: "success",
                            text: "{!! trans('frontend.success_add_comment_message') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_comment_form')[0].reset();
                        grecaptcha.reset();
                    }
                    if (data.status == false) {
                        swal({
                            icon: "error",
                            text: "{!! trans('frontend.comment_disable') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_comment_form')[0].reset();
                        grecaptcha.reset();

                    }
                },
                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', '#F64E60')
                    });
                },


            });

        })
    </script>
@endpush
