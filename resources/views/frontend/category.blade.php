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
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/5.jpg') !!});">
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

    <!-- Events Detail Section -->
    <div class="events-detail-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="upper-image">
                    <img style="height: 420px" src="{!! asset('uploads/posts/' . $post->photo) !!}" alt="{!! asset('uploads/posts/' . $post->photo) !!}"
                        title="{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}" />
                </div>
                <div class="lower-section">
                    <ul class="post-meta">
                        <li><span class="icon fas fa-calendar-alt"></span>{!! $post->post_added_date !!}</li>
                    </ul>
                    <h2>{!! Lang() == 'ar' ? $post->post_title_ar : $post->post_title_en !!}</h2>
                    <div class="text">
                        <p class="my_lead">
                            {!! Lang() == 'ar' ? $post->post_details_ar : $post->post_details_en !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Events Detail Section -->
@endsection
