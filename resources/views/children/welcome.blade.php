@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section id="card-header-options">
        <div class="container mt-2" style="display: table;
        height: 80vh;
        width: 100%;">
            <div class="row" style="display: table-cell;
        vertical-align: middle;">
                <div class="col-md-4 col-md-5 col-sm-12 mb-2 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! __('children.welcome') !!}
                            </h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <img src="{!! asset('uploads/settings/' . setting()->logo) !!}" style="width: 220px" class="img-fluid  round">
                            </div>

                            <div class="container">

                                <!-- begin: row -->
                                <div class="row mt-5 mb-2">

                                    <div class="col-12">
                                        <a href="{!! route('child.get.register') !!}"
                                            class="btn btn-info btn-block  mb-1 font-weight-bolder">{!! __('children.new_register') !!}
                                        </a>
                                    </div>

                                    <div class="col-12">
                                        <a href="{!! route('child.get.login') !!}"
                                            class="btn btn-primary btn-block  mb-1 font-weight-bolder">{!! __('children.orphan_login') !!}
                                        </a>
                                    </div>

                                </div>
                                <!-- end: row -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
