@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-90 h-100">

        <div class="container">
            <div class="card card-body blur shadow-blur mx-4 mt-7 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {!! $child->childFullName() !!}
                            </h5>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link   active" id="nav-child-info-tab" data-bs-toggle="tab"
                                        aria-controls="nav-child-info" data-bs-target="#nav-child-info" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <span class="ms-1">{!! __('children.child_info') !!}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-bs-toggle="tab" href="javascript:;" id="nav-parents-info-tab"
                                        data-bs-target="#nav-parents-info" aria-controls="nav-parents-info" role="tab"
                                        aria-selected="false">
                                        <span class="ms-1">{!! __('children.parents_info') !!}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " data-bs-toggle="tab" href="javascript:;"
                                        id="nav-guardian-info-tab" data-bs-target="#nav-guardian-info"
                                        aria-controls="nav-guardian-info" role="tab" aria-selected="false">
                                        <span class="ms-1">{!! __('children.guardian_info') !!}</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " data-bs-toggle="tab" href="javascript:;" id="nav-file-info-tab"
                                        data-bs-target="#nav-file-info" aria-controls="nav-file-info" role="tab"
                                        aria-selected="false">
                                        <span class="ms-1">{!! __('children.files') !!}</span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>


                    <div class="col-12 mt-4">
                        <div class="row">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-child-info" role="tabpanel"
                                    aria-labelledby="nav-child-info-tab" tabindex="0">
                                    @include('children._child-tabs.child-info')
                                </div>
                                <div class="tab-pane fade" id="nav-parents-info" role="tabpanel"
                                    aria-labelledby="nav-parents-info-tab" tabindex="0">
                                    @include('children._child-tabs.parents-info')
                                </div>
                                <div class="tab-pane fade" id="nav-guardian-info" role="tabpanel"
                                    aria-labelledby="nav-guardian-info-tab" tabindex="0">
                                    @include('children._child-tabs.guardian-info')
                                </div>

                                <div class="tab-pane fade" id="nav-file-info" role="tabpanel"
                                    aria-labelledby="nav-file-info-tab" tabindex="0">
                                    @include('children._child-tabs.file-info')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
