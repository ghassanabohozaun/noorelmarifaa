@extends('layouts.frontend')
@section('title'){!! $title!!}@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/12.jpg') !!});">
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
                <div class="col-lg-12">

                    @if(Lang()=='ar')
                        @if(empty($department->staticPage->details_ar))
                            <h2 class="text-warning font-weight-bolder">{!! trans('frontend.coming_soon') !!}</h2>
                        @else
                            {!!  $department->staticPage->details_ar  !!}
                        @endif
                    @else

                        @if(empty($department->staticPage->details_en))
                            <h2 class="text-warning font-weight-bolder">{!! trans('frontend.coming_soon') !!}</h2>
                        @else
                            {!!  $department->staticPage->details_en  !!}
                        @endif
                    @endif

                </div>
            </div>
        </div>


           </section>
    <!-- End Welcome Section -->
@endsection
