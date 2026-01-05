@extends('layouts.frontend')
@section('title')
    {!! trans('frontend.home') !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')
    <!--Main Slider-->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme ">

            @foreach ($sliders as $key => $slider)
                <div class="slide" style="background-image:url( {!! asset('uploads/sliders/' . $slider->photo) !!})">
                    <div class="auto-container">
                        <div class="content clearfix">
                            {{-- <h2>
                                {!! $slider->title !!}
                            </h2> --}}

                            <div class="text"> &nbsp; </div>

                            {{-- @if ($slider->button_status == 1)
                                <span class="my_slider_span">
                                    <a href="{!! $slider->link !!}" target="_blank" class="my_slider_button">
                                        {!! $slider->title !!}
                                    </a>
                                </span>
                            @endif --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!--Scroll Dwwn Btn-->
        <div class="mouse-btn-down scroll-to-target" data-target=".welcome-section"></div>
    </section>
    <!--End Main Slider-->



    <!-- Call To Action Section -->
    <section class="call-to-action-section">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h2>{!! trans('frontend.your_small_help_make_world_better') !!}</h2>
                    <div class="text">{!! trans('frontend.help_us_support_our_work') !!}</div>
                </div>
                <div class="pull-right">
                    <a href="{!! route('contact.us') !!}" class="theme-btn btn-style-two">{!! trans('frontend.contact_us') !!}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->



    <!-- programs Section -->
    <section class="faq-section style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Accordian Column -->
                <div class="accordian-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2><span class="theme_color">{!! trans('frontend.association_programmes') !!}</h2>
                        </div>

                        <!--Accordian Box-->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_1') !!}
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_1') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn ">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_2') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_2') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_3') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_3') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_4') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_4') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_5') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_5') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_6') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_6') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    {!! trans('frontend.program_title_7') !!}
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text my_lead">
                                            {!! trans('frontend.program_details_7') !!}
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{!! asset('frontend/images/programs.jpeg') !!}" alt="{!! asset('frontend/images/programs.jpeg') !!}" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End programs Section -->



    <!-- projects Section -->
    <section class="news-section-two" style="background-image: url({!! asset('frontend/images/background/7.jpg') !!})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light">
                <h2><span class="theme_color">
                        {!! trans('frontend.our_latest') !!}
                    </span> {!! trans('frontend.projects') !!}
                </h2>
            </div>
            @if ($projects->isEmpty())
                <h3 class="text-warning">{!! trans('frontend.no_projects') !!} </h3>
            @else
                <div class="news-carousel owl-carousel owl-theme">
                    @foreach ($projects as $project)
                        <!-- Start project Block Three -->
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{!! route(
                                        'post',
                                        Lang() == 'ar' ? str_replace(' ', '-', $project->post_title_ar) : str_replace(' ', '-', $project->post_title_en),
                                    ) !!}">
                                        <img src="{!! asset('uploads/posts/' . $project->photo) !!}" style="width: 100% ; height: 250px"
                                            alt="{!! asset('uploads/posts/' . $project->photo) !!}" title="{!! Lang() == 'ar' ? $project->post_title_ar : $project->post_title_en !!}" />
                                    </a>
                                    <div class="read-more">
                                        <a href="{!! route(
                                            'post',
                                            Lang() == 'ar' ? str_replace(' ', '-', $project->post_title_ar) : str_replace(' ', '-', $project->post_title_en),
                                        ) !!}" class="more"> {!! trans('frontend.read_more') !!}</a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="content">
                                        <div class="date-outer">
                                            <?php $splitDate = explode('-', $project->post_added_date); ?>
                                            <div class="date"><?php echo $splitDate[2]; ?></div>
                                            @if (Lang() == 'ar')
                                                <div class="month"><?php echo $splitDate[0] . '/' . $splitDate[1]; ?></div>
                                            @else
                                                <div class="month"><?php echo $splitDate[1] . '/' . $splitDate[0]; ?></div>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                        <h3>
                                            <a href="{!! route(
                                                'post',
                                                Lang() == 'ar' ? str_replace(' ', '-', $project->post_title_ar) : str_replace(' ', '-', $project->post_title_en),
                                            ) !!}">
                                                {!! Lang() == 'ar' ? $project->post_title_ar : $project->post_title_en !!}
                                            </a>
                                        </h3>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <span
                                                        class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines">
                                                    </span>{!! trans('frontend.comments') !!}
                                                    {!! App\Models\Comment::where('post_id', $project->id)->count() !!}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><span class="icon far fa-folder-open"></span>
                                                    {!! __('frontend.projects') !!}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End  project Block Three -->
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!-- End projects Section-->



    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><span class="theme_color">{!! trans('frontend.our_latest') !!}
                    </span> {!! trans('frontend.news') !!}
                </h2>
            </div>

            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">

                    @if (!empty($latestPost))
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="{!! route(
                                        'post',
                                        Lang() == 'ar'
                                            ? str_replace(' ', '-', $latestPost->post_title_ar)
                                            : str_replace(' ', '-', $latestPost->post_title_en),
                                    ) !!}">
                                        <img style="height: 380px" src="{!! asset('uploads/posts/' . $latestPost->photo) !!}"
                                            alt="{!! asset('uploads/posts/' . $latestPost->photo) !!}" title="{!! Lang() == 'ar' ? $latestPost->title_ar : $latestPost->title_en !!}" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <div class="content">
                                        <div class="date-outer">
                                            <?php $splitDate = explode('-', $latestPost->post_added_date); ?>
                                            <div class="date"><?php echo $splitDate[2]; ?></div>
                                            @if (Lang() == 'ar')
                                                <div class="month"><?php echo $splitDate[0] . '/' . $splitDate[1]; ?></div>
                                            @else
                                                <div class="month"><?php echo $splitDate[1] . '/' . $splitDate[0]; ?></div>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                        <h3>
                                            <a href="{!! route(
                                                'post',
                                                Lang() == 'ar'
                                                    ? str_replace(' ', '-', $latestPost->post_title_ar)
                                                    : str_replace(' ', '-', $latestPost->post_title_en),
                                            ) !!}">
                                                {!! Lang() == 'ar' ? $latestPost->post_title_ar : $latestPost->post_title_en !!}
                                            </a>
                                        </h3>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <span
                                                        class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines">
                                                    </span>{!! trans('frontend.comments') !!}
                                                    {!! App\Models\Comment::where('post_id', $latestPost->id)->count() !!}
                                                </a>
                                            </li>
                                            <li><a href="javascript:void(0)">
                                                    <span class="icon far fa-folder-open"></span>
                                                    {!! __('frontend.news') !!}
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <h3 class="text-warning">{!! trans('frontend.no_news_activity') !!} </h3>
                    @endif


                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">

                    @forelse($nextPosts as $nextPost)
                        <!-- Start News Block -->
                        <div class="news-block-two">
                            <div class="inner-box wow fadeInUp" data-wow-delay="5ms" data-wow-duration="1500ms">
                                <div class="image-layer" style="background-image: url({!! asset('uploads/posts/' . $nextPost->photo) !!})">
                                </div>
                                <div class="content">
                                    <div class="date-outer">
                                        <?php $splitDate = explode('-', $nextPost->post_added_date); ?>
                                        <div class="date"><?php echo $splitDate[2]; ?></div>
                                        @if (Lang() == 'ar')
                                            <div class="month"><?php echo $splitDate[0] . '/' . $splitDate[1]; ?></div>
                                        @else
                                            <div class="month"><?php echo $splitDate[1] . '/' . $splitDate[0]; ?></div>
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3>
                                        <a href="{!! route(
                                            'post',
                                            Lang() == 'ar' ? str_replace(' ', '-', $nextPost->post_title_ar) : str_replace(' ', '-', $nextPost->post_title_en),
                                        ) !!}">
                                            {!! Lang() == 'ar' ? $nextPost->post_title_ar : $nextPost->post_title_en !!}
                                        </a>
                                    </h3>
                                    <ul class="post-meta">
                                        <li><a href="javascript:void(0)">
                                                <span
                                                    class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines">
                                                </span>{!! trans('frontend.comments') !!}
                                                {!! App\Models\Comment::where('post_id', $nextPost->id)->count() !!}

                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="icon far fa-folder-open"></span>
                                                {!! __('frontend.news') !!}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->
                    @empty
                    @endforelse

                </div>
            </div>

        </div>
    </section>
    <!-- End News Section -->


    <br /><br /><br />

    <!-- Counter Section -->
    <section class="counter-section" style="background-image:url( {!! asset('frontend/images/background/1.jpg') !!})">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-lightbulb"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500"
                                        data-stop="300">{{ websiteMainPage()->counter_one }}</span> +
                                </div>
                                <h4 class="counter-title">{!! trans('frontend.sponsored_children') !!}</h4>
                            </div>
                        </div>
                    </div>


                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-process"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000"
                                        data-stop="400">{{ websiteMainPage()->counter_two }}</span> +
                                </div>
                                <h4 class="counter-title">{!! trans('frontend.assistances') !!}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-startup-1"></div>
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000"
                                        data-stop="500">{{ websiteMainPage()->counter_three }}</span> +
                                </div>
                                <h4 class="counter-title">{!! trans('frontend.complete_projects') !!}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-sketch"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500"
                                        data-stop="600">{{ websiteMainPage()->counter_four }}</span>
                                </div>
                                <h4 class="counter-title">{!! trans('frontend.programmes') !!}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->


    <!--Clients Section-->
    <section class="clients-section">
        <div class="outer-container">
            <div class="sponsors-outer">
                @if (setting()->sponsors_status != '0')
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/ptc.jpg') !!}" alt="{!! asset('frontend/images/clients/ptc.jpg') !!}">
                                </a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/iqfa.png') !!}" alt="{!! asset('frontend/images/clients/iqfa.png') !!}">
                                </a>
                            </figure>
                        </li>

                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/EAP.png') !!}" alt="{!! asset('frontend/images/clients/EAP.png') !!}">
                                </a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/H.png') !!}" alt="{!! asset('frontend/images/clients/H.png') !!}">
                                </a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/MA.png') !!}" alt="{!! asset('frontend/images/clients/MA.png') !!}">
                                </a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/Pcc.png') !!}" alt="{!! asset('frontend/images/clients/Pcc.png') !!}">
                                </a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="javascript:void(0)">
                                    <img src="{!! asset('frontend/images/clients/UK.png') !!}" alt="{!! asset('frontend/images/clients/UK.png') !!}">
                                </a>
                            </figure>
                        </li>
                    </ul>
                @endif
            </div>

        </div>
    </section>
    <!--End Clients Section-->

@endsection
