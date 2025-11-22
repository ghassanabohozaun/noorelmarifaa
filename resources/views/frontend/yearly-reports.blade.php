@extends('layouts.frontend')
@section('title'){!! $title!!}@endsection
@section('metaTags')
    <meta name="description"
          content="{!! Lang()=='ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords"
          content="{!! Lang()=='ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/16.jpg') !!});">
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

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">

            @forelse($yearlyReports as $yearlyReport)

                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <div class="book_btn d-none d-lg-block">
                            <div class="download_brochure d-flex align-items-center justify-content-between">
                                <div class="download_right d-flex align-items-center">
                                    <div class="icon">
                                        <img style="width: 85px; height: 85px;"
                                             src="{!! asset('frontend/images/pdf.png') !!}"
                                             alt="">
                                    </div>
                                </div>
                                &nbsp; &nbsp;
                                <div class="download_right">
                                    <a href="{!! route('get.yearly.reports.for.one.year',$yearlyReport->year) !!}" class="boxed-btn3-line" >
                                      {!! trans('frontend.yearly_report_for') !!}  {!! $yearlyReport->year !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <h3 class="text-warning">{!! trans('frontend.no_yearly_reports_exists') !!}</h3>
                @endforelse

            </div>
        </div>

    </section>
    <!-- End Welcome Section -->
@endsection
