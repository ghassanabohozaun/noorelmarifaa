@extends('layouts.dashboard.app')
@section('title')
    {!! $title !!}
@endsection

@push('style')
    <link href="{!! asset('vendor/summernote/summernote-bs4.css') !!}" rel="stylesheet">
@endpush

@section('content')
    <div class="app-content content">

        <form class="form" action="" method="post" enctype="multipart/form-data" id="update_post_form">
            @csrf
            @method('PUT')
            <div class="content-wrapper">
                <!-- begin: content header -->
                <div class="content-header row">
                    <!-- begin: content header left-->
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                        <h3 class="content-header-title mb-0 d-inline-block">{!! __('posts.posts') !!}</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{!! route('dashboard.index') !!}">
                                            {!! __('dashboard.home') !!}
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{!! route('dashboard.posts.index') !!}">
                                            {!! __('posts.posts') !!}
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">
                                            {!! __('posts.create_new_post') !!}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end: content header left-->

                    <!-- begin: content header right-->
                    <div class="content-header-right col-md-6 col-12">
                        <div class="float-md-right mb2">
                            <button class="btn btn-info  btn-glow px-2" type="submit">
                                <i class="la la-save"></i>
                                {!! __('general.save') !!}
                                <i class="la la-refresh spinner spinner_loading d-none">
                                </i>
                            </button>

                        </div>
                    </div>
                    <!-- end: content header right-->

                </div> <!-- end :content header -->

                <!-- begin: content body -->
                <div class="content-body">
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- begin: card header -->
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-colored-form-control">
                                            {!! __('posts.create_new_post') !!}
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

                                            <div class="row justify-content-center ">
                                                <div class="col-xl-12">
                                                    <!--begin::body-->
                                                    <div class="my-5">
                                                        <div class="alert alert-danger alert_errors d-none"
                                                            style="padding-top: 20px">
                                                            <ul></ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <ul class="nav nav-success nav-tabs" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="post_settings_tab" data-toggle="tab"
                                                        href="#post_settings">
                                                        <span class="nav-icon"><i class="flaticon2-settings"></i></span>
                                                        <span class="nav-text">{{ trans('posts.post_settings_tab') }}</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="post_details_ar_tab" data-toggle="tab"
                                                        href="#post_details_ar" aria-controls="profile">
                                                        <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                                        <span
                                                            class="nav-text">{{ trans('posts.post_details_ar_tab') }}</span>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" id="post_details_en_tab" data-toggle="tab"
                                                        href="#post_details_en" aria-controls="profile">
                                                        <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                                        <span
                                                            class="nav-text">{{ trans('posts.post_details_en_tab') }}</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mt-5">
                                                @include('dashboard.posts.update_tabs.settings')
                                                @include('dashboard.posts.update_tabs.details_ar')
                                                @include('dashboard.posts.update_tabs.details_en')
                                            </div>


                                        </div>
                                        <!-- end: card content -->
                                    </div>
                                </div> <!-- end: card  -->
                            </div><!-- end: row  -->
                    </section><!-- end: sections  -->
                </div><!-- end: content body  -->
            </div> <!-- end: content wrapper  -->
        </form>
    </div><!-- end: content app  -->
@endsection
@push('scripts')
    <script src="{!! asset('vendor/summernote/summernote.js') !!}"></script>

    <script type="text/javascript">
        // post ar summernote
        $('.post_details_ar').summernote({
            placeholder: '{!! __('general.write_here') !!}',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // post en summernote
        $('.post_details_en').summernote({
            placeholder: '{!! __('general.write_here') !!}',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

    <script type="text/javascript">
        $('#update_post_form').on('submit', function(e) {
            e.preventDefault();

            ////////////////////////////////////////////////////////////////////
            $('#post_title_ar_error').text('');
            $('#post_title_en_error').text('');
            $('#post_summary_ar_error').text('');
            $('#post_summary_en_error').text('');
            $('#post_details_ar_error').text('');
            $('#post_details_en_error').text('');
            $('#post_added_date_error').text('');
            $('#post_status_error').text('');
            $('#post_language_error').text('');
            $('#department_id_error').text('');
            $('#photo_error').text('');

            $('#post_title_ar').css('border-color', '');
            $('#post_title_en').css('border-color', '');
            $('#post_summary_ar').css('border-color', '');
            $('#post_summary_en').css('border-color', '');

            $('.post_details_ar').next('.note-editor').removeClass(
                'is-invalid-summernote-editor');
            $('.post_details_en').next('.note-editor').removeClass(
                'is-invalid-summernote-editor');
            $('#post_added_date').css('border-color', '');
            $('#post_status').css('border-color', '');
            $('#post_language').css('border-color', '');
            $('#department_id').css('border-color', '');
            $('#photo').css('border-color', '');

            ///////////////////////////////////////////////////////////////////
            var id = $('#postID').val();
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = "{!! route('dashboard.posts.update', ':id') !!}".replace(':id', id);

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'json',
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.spinner_loading').removeClass('d-none');
                }, //end beforeSend
                success: function(data) {
                    if (data.status == true) {
                        console.log(data);
                        $('.alert_errors').find('ul').empty();
                        $('.alert_errors').addClass('d-none');
                        flasher.success("{!! __('general.add_success_message') !!}");
                    } else {
                        flasher.error("{!! __('general.add_error_message') !!}");
                    }
                }, //end success
                error: function(reject) {

                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {

                        if (key == 'post_details_ar') {
                            $('.post_details_ar').next('.note-editor').addClass(
                                'is-invalid-summernote-editor');
                        }

                        if (key == 'post_details_en') {
                            $('.post_details_en').next('.note-editor').addClass(
                                'is-invalid-summernote-editor');
                        }


                        $('#' + key + '_error').text(value[0])
                        $('#' + key).css('border-color', '#F64E60 ')
                    });


                    PostPrintErrors(response.errors)

                }, //end error
                complete: function() {
                    $('.spinner_loading').addClass('d-none');
                }, //end complete

            }); //end ajax

        }); //end submit

        ////////////////////////////////////
        ////// Print Errors Function
        function PostPrintErrors(msg) {

            $('.alert_errors').find('ul').empty();
            $('.alert_errors').removeClass('d-none');
            $('.alert_success').addClass('d-none');
            $('.loading_save_continue').addClass('d-none');
            $.each(msg, function(key, value) {
                $('.alert_errors').find('ul').append("<li>" + value + "</li>");
            });
        }
    </script>
@endpush
