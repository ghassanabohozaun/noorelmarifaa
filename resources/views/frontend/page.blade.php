@extends('layouts.frontend')
@section('title')
    {!! $page->title !!}
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/12.jpg') !!});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <h1>{!! $page->title !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12">

                    @if (!$page->details && !$page->file)
                        <h2 class="text-warning font-weight-bolder">{!! trans('frontend.coming_soon') !!}</h2>
                    @else
                        @if ($page->details)
                            {!! $page->details !!}
                        @endif

                        @if ($page->file)
                            <div class="item_pdf">
                                <i class="fa fa-file-pdf fa-6x" style="color:#ec4b1c"></i>
                                <span class="caption_pdf">
                                    <a class="anchor_pdf" href="{!! asset('uploads/pages/' . $page->file) !!}" target="_blank">
                                        {!! __('general.download') !!}
                                    </a>
                                </span>
                            </div>
                        @endif
                    @endif

                </div>
            </div>
        </div>


    </section>
    <!-- End Welcome Section -->
@endsection
