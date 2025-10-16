@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section>
        <div class="page-header min-vh-90">
            <div class="container">

                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card z-index-0  col-xl-5 col-lg-6  col-sm-12 mt-2">

                            <div class="card-header pb-0 text-left bg-transparent mt-4 mb-2">

                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{!! asset('assets/children/assets/img/logo.png') !!}" style="width: 200px"
                                        class="img-fluid img-thumbnail round">
                                </div>
                            </div>
                            <div class="card-body mb-3">

                                <div class="container ">
                                    <!-- begin: row -->
                                    <div class="row mt-4">

                                        <div class="col-6">
                                            <a href="{!! route('child.get.register') !!}"
                                                class="btn btn-info  mb-1 font-weight-bolder">{!! __('children.new_register') !!}
                                            </a>
                                        </div>

                                        <div class="col-6">
                                            <a href="{!! route('child.get.login') !!}"
                                                class="btn btn-info  mb-1 font-weight-bolder">{!! __('children.previous_register') !!}
                                            </a>
                                        </div>

                                    </div>
                                    <!-- end: row -->
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
