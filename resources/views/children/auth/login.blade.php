@extends('layouts.children.app')

@section('title')
    {!! __('auth.login') !!}
@endsection
@section('content')
    <section>
        <div class="page-header min-vh-85">
            <div class="container">

                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card z-index-0  col-xl-4 col-lg-6  col-sm-12 mt-2">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{!! asset('assets/children/assets/img/logo.png') !!}" style="width: 180px">
                            </div>

                            <div class="card-header pb-0 text-left bg-transparent">
                                {{-- <h3 class="font-weight-bolder text-info text-gradient">{!! __('auth.welcome_back') !!}</h3> --}}
                                {{-- <p class="mb-0">{!! __('auth.enter_child_personal_id_and_passwrod_to_sign_in') !!}</p> --}}
                            </div>
                            <div class="card-body">

                                <form action="{!! route('child.post.login') !!}" method="post" class="form-horizontal"
                                    enctype="multipart/form-data" role="form">
                                    @csrf

                                    <label>{!! __('auth.child_pesonal_id') !!}</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="personal_id" id='personal_id'
                                            placeholder="{!! __('auth.enter_child_pesonal_id') !!}" aria-label="child_pesonal_id"
                                            aria-describedby="child_pesonal_id-addon">
                                        @error('personal_id')
                                            <strong class="text-danger"> {!! $message !!} </strong>
                                        @enderror
                                    </div>

                                    <label>{!! __('auth.password') !!}</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="password" id='password'
                                            placeholder="{!! __('auth.enter_password') !!}" aria-label="password"
                                            aria-describedby="password-addon">
                                        @error('password')
                                            <strong class="text-danger"> {!! $message !!} </strong>
                                        @enderror
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">
                                            {!! __('auth.login') !!}
                                        </button>
                                    </div>
                                </form>

                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
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
        </div>
    </section>
@endsection
