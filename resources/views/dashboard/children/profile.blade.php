@extends('layouts.dashboard.app')
@section('title')
    {!! $title !!}
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <!-- begin: content header -->
            <div class="content-header row">

                <!-- begin: content header left-->
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('children.profile') !!}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.index') !!}">
                                        {!! __('dashboard.home') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.children.index') !!}">
                                        {!! __('children.children') !!}
                                    </a>
                                </li>

                                <li class="breadcrumb-item">
                                    <a href="">
                                        {!! __('children.profile') !!}
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end: content header left-->

                <!-- begin: content header right-->
                <div class="content-header-right col-md-6 col-12">
                    <div class="float-md-right mb-2">

                        <div class="dropdown float-md-left">
                            <button class="btn btn-dark btn-glow px-2  dropdown-toggle " id="dropdownBreadcrumbButton"
                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{!! __('general.export') !!}
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="{!! route('dashboard.children.download.pdf', $child->id) !!}" target="_blank">
                                    <i class="la la-file-pdf-o"></i>Form 1
                                </a>
                                <a class="dropdown-item" href="{!! route('dashboard.children.download.pdf2', $child->id) !!}" target="_blank">
                                    <i class="la la-file-pdf-o"></i> Form 2
                                </a>
                                <a class="dropdown-item" href="{!! route('dashboard.children.download.pdf3', $child->id) !!}" target="_blank">
                                    <i class="la la-file-pdf-o"></i> Form 3
                                </a>
                            </div>
                        </div>
                        &nbsp;


                        <a href="{!! route('dashboard.children.edit', $child->id) !!}" class="btn btn-primary btn-glow px-2">
                            {!! __('children.update_child') !!}
                        </a>
                        <a href="{!! route('dashboard.children.create') !!}" class="btn btn-info  btn-glow px-2">
                            {!! __('children.create_new_child') !!}
                        </a>



                    </div>
                </div>
                <!-- end: content header right-->

            </div>
            <!-- end :content header -->

            <!-- begin: content body -->
            <div class="row" style="display: flex ; justify-content: center;">
                <div class="col-md-12">
                    <!-- begin: section -->
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- begin: card header -->
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-colored-form-control">
                                            {!! __('children.child_info') !!}
                                        </h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="reload-form"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: card header -->

                                    <!-- begin: card content -->
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <!-- begin: basic info div -->
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    @if ($child->childFile->picture_of_the_orphan_child)
                                                        <div class="media mt-3">
                                                            <div class="media-left pr-1">
                                                                <span class="avatar avatar-lg rounded-circle">
                                                                    <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}"
                                                                        alt="avatar"><i></i></span>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="media mt-3">
                                                            <div class="media-left pr-1">
                                                                <span class="avatar avatar-lg rounded-circle">
                                                                    <img src="{!! asset('assets\dashbaord\images\avatar-male.jpg') !!}"
                                                                        alt="avatar"><i></i></span>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <h3 class="media-heading  pt-1  text-info">
                                                        {!! $child->childFullName() !!}
                                                    </h3>

                                                    @include('dashboard\children\profile\tabs')


                                                </div>
                                            </div>
                                            <!-- end: basic info div -->
                                        </div>
                                        <!-- end: card content -->
                                    </div>
                                </div> <!-- end: card  -->
                            </div><!-- end: row  -->
                        </div>
                    </section>
                    <!-- end: section   -->
                </div>
            </div>


            <!-- end: content body -->
        </div>
        <!-- end: content body  -->
    </div> <!-- end: content wrapper  -->
    </div><!-- end: content app  -->
@endsection
