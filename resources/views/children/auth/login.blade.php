@extends('layouts.children.app')

@section('title')
    {!! __('auth.login') !!}
@endsection
@section('content')
    <section id="card-header-options">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-4 col-md-6 col-sm-12 mb-2 mx-auto">
                    <div class="card">
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <img src="{!! asset('uploads/settings/' . setting()->logo) !!}" style="width: 180px" class="img-fluid   round">
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="{!! route('child.post.login') !!}" method="post" class="form-horizontal"
                                    enctype="multipart/form-data" role="form">
                                    @csrf

                                    <label>{!! __('auth.child_pesonal_id') !!}</label>
                                    <div class="mb-1">
                                        <input type="text" class="form-control" name="personal_id" id='personal_id'
                                            placeholder="{!! __('auth.enter_child_pesonal_id') !!}" aria-label="child_pesonal_id"
                                            aria-describedby="child_pesonal_id-addon">
                                        @error('personal_id')
                                            <strong class="text-danger"> {!! $message !!} </strong>
                                        @enderror
                                    </div>


                                    <label>{!! __('auth.password') !!}</label>
                                    <div class="mb-1">
                                        <input type="password" class="form-control" name="password" id='password'
                                            placeholder="{!! __('auth.enter_password') !!}" aria-label="password"
                                            aria-describedby="password-addon">
                                        @error('password')
                                            <strong class="text-danger"> {!! $message !!} </strong>
                                        @enderror
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-block btn-lg"
                                            style="font-size: 16px">
                                            <i class="ft-unlock"></i> {!! __('auth.login') !!}</button>


                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 mt-2 text-sm mx-auto">
                                    {!! __('auth.dont_have_account') !!}
                                    <a href="{!! route('child.get.register') !!}" class="text-info text-gradient font-weight-bold">
                                        {!! __('auth.register_new_orphan') !!}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
