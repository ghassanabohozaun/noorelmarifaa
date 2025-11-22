@extends('layouts.frontend')
@section('title'){!! $title!!} @endsection
@section('metaTags')
    <meta name="description"
          content="{!! Lang()=='ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords"
          content="{!! Lang()=='ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/6.jpg') !!});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
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
                <div class="content-side col-lg-8 col-md-12 col-sm-12" id="posts_list">
                    @include('frontend.news-paging')
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
                                    $postDepartments = App\Models\Department::where('status', 'enable')
                                    ->where('class', 'post')->get();
                                @endphp
                                @foreach($postDepartments as $postDepartment)
                                    <li>
                                        @if(Lang()=='ar')
                                            <a href="{!! route('categories',str_replace(' ','-',$postDepartment->dep_name_ar)) !!}">
                                                {!! $postDepartment->dep_name_ar !!}
                                                <span>
                                                    {!! App\Models\Post::where('department_id',$postDepartment->id)->count() !!}
                                                </span>
                                            </a>
                                        @else
                                            <a href="{!! route('categories',str_replace(' ','-',$postDepartment->dep_name_en)) !!}">
                                                {!! $postDepartment->dep_name_en !!}
                                                <span>
                                                    {!! App\Models\Post::where('department_id',$postDepartment->id)->count() !!}
                                                </span>
                                            </a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h2>{!! trans('frontend.last_news')!!}</h2>
                            </div>
                            <div class="widget-content">
                                @forelse($lastPosts as $lastPost)
                                    <article class="post">
                                        <figure class="post-thumb">
                                            <a href="{!! route('new', Lang()=='ar' ? str_replace(' ','-',$lastPost->post_title_ar): str_replace(' ','-',$lastPost->post_title_en)) !!}">
                                                <img style="height: 90px"
                                                    src="{!! asset(Storage::url($lastPost->photo)) !!}"
                                                    alt="{!! asset(Storage::url($lastPost->photo)) !!}"
                                                    title="{!!  Lang()=='ar' ? $lastPost->post_title_ar : $lastPost->post_title_en !!}">
                                            </a>
                                        </figure>
                                        <div class="text">
                                            <a href="{!! route('new', Lang()=='ar' ? str_replace(' ','-',$lastPost->post_title_ar): str_replace(' ','-',$lastPost->post_title_en)) !!}">
                                                {!!  Lang()=='ar' ? $lastPost->post_title_ar : $lastPost->post_title_en !!}
                                            </a>
                                        </div>
                                        <div class="post-info">{!! $lastPost->post_added_date !!}</div>
                                    </article>
                                @empty
                                    <h5 class="text-warning">{!! trans('frontend.no_exists') !!} {!! $title !!} {!! trans('frontend.now') !!}</h5>
                                @endforelse
                            </div>
                        </div>

                        <!-- Help Widget -->
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
                                        <a href="tel:{!! setting()->site_mobile !!}"> {!! setting()->site_mobile !!}</a>
                                    </li>
                                    <li>
                                        <span class="icon fas fa-envelope"></span>
                                        <a href="mailto:{!! setting()->site_email !!}">{!! setting()->site_email !!}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">

        /////////////////////////////////////////////////////////////////
        ///  posts Paging
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            readPage(page);
        }); // End Document On
        /////////////////////////////////////////////////////////////////
        ///  read Page
        function readPage(page) {
            $.ajax({
                url: '/categories-paging/' + '{!! $id !!}' + '?page=' + page
            }).done(function (data) {
                $('#posts_list').html(data);
                $('html, body').animate({
                    scrollTop: "520px"
                }, 2000);
            });

        }// end readPage
    </script>
@endpush
