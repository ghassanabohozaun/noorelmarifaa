@extends('layouts.frontend')
@section('title')
    {!! $title !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/11.jpg') !!});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <h1>{!! trans('frontend.contact_us') !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">

                <iframe frameborder="0" width="100%" height="500" style="border:0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.0676150019403!2d34.38713031413043!3d31.458547557341966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDI3JzMwLjgiTiAzNMKwMjMnMjEuNiJF!5e1!3m2!1sen!2s!4v1564658697140!5m2!1sen!2s"
                    allowfullscreen="" aria-hidden="false"></iframe>
            </div>

        </div>
    </section>
    <!-- End Map Section -->



    <!-- Contact Section -->
    <section class="contact-section" style="background-image: url({!! asset('frontend/images/background/map-pattern-1.png') !!})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><span class="theme_color">{!! trans('frontend.contact') !!}</span> {!! trans('frontend.us') !!}
                </h2>
            </div>
            <div class="row clearfix">

                <!-- Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box">
                            <span class="icon flaticon-location"></span>
                        </div>
                        <h3>{!! trans('frontend.address') !!}:</h3>
                        <div class="text">
                            {!! Lang() == 'ar' ? setting()->site_address_ar : setting()->site_address_en !!}
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box">
                            <span class="icon flaticon-call"></span>
                        </div>
                        <h3>{!! trans('frontend.phone') !!}:</h3>
                        <div class="text">{!! setting()->site_mobile !!}</div>
                    </div>
                </div>

                <!-- Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box">
                            <span class="icon flaticon-email-1"></span>
                        </div>
                        <h3>{!! trans('frontend.email') !!}:</h3>
                        <div class="text">{!! setting()->site_email !!}</div>
                    </div>
                </div>

            </div>

            <!-- Default Form -->
            <div class="default-form contact-form">
                <form method="POST" action="{!! route('admin.communication.requests.add') !!}" id="add_contact_form">
                    @csrf
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">

                            <!-- Form Group -->
                            <div class="d-none form-group">
                                <input type="text" name="communication_status" id="communication_status" value="0">

                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="communication_sender" id="communication_sender"
                                    autocomplete="off" value="" placeholder="{!! trans('frontend.enter_sender') !!}">
                                <span class="form-text text-danger" id="communication_sender_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="email" name="communication_email" id="communication_email" autocomplete="off"
                                    value="" placeholder="{!! trans('frontend.enter_email') !!}">
                                <span class="form-text text-danger" id="communication_email_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="communication_title" id="communication_title" autocomplete="off"
                                    value="" placeholder="{!! trans('frontend.enter_title') !!}">
                                <span class="form-text text-danger" id="communication_title_error"></span>
                            </div>

                            <div class="form-group">
                                {!! NoCaptcha::display() !!}
                                <span class="form-text text-danger" id="g-recaptcha-response_error"></span>
                            </div>







                        </div>

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <!-- Form Group -->
                            <div class="form-group">
                                <textarea name="communication_details" id="communication_details" autocomplete="off"
                                    placeholder="{!! trans('frontend.enter_details') !!}"></textarea>
                                <span class="form-text text-danger" id="communication_details_error"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one btn-block">
                                    <span class="txt">{!! trans('frontend.send_now') !!}
                                    </span>
                                </button>
                            </div>

                        </div>

                    </div>


                </form>
            </div>
            <!--End Default Form-->

        </div>
    </section>
    <!-- End Contact Section -->
@endsection
@push('js')
    {!! NoCaptcha::renderJs() !!}


    <script type="text/javascript">
        //////////////////////////////////////////////////////
        $('#add_contact_form').on('submit', function(e) {
            e.preventDefault();

            ///////////////////////////////////////////////////////////////////////////
            $('#communication_sender_error').text('')
            $('#communication_email_error').text('')
            $('#communication_title_error').text('')
            $('#communication_details_error').text('')
            $('#communication_status_error').text('')
            $('#g-recaptcha-response_error').text('')

            $('#communication_sender').css('border-color', '');
            $('#communication_email').css('border-color', '');
            $('#communication_title').css('border-color', '');
            $('#communication_details').css('border-color', '');
            $('#communication_status').css('border-color', '');
            ///////////////////////////////////////////////////////////////////////////

            var data = new FormData(this);
            var url = $(this).attr('action');
            var type = $(this).attr('method');

            $.ajax({
                url: url,
                data: data,
                dataType: 'json',
                type: type,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        swal({
                            icon: "success",
                            text: "{!! trans('frontend.success_add_communication_request_message') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_contact_form')[0].reset();
                        grecaptcha.reset();
                    }

                    if (data.status == false) {
                        swal({
                            icon: "error",
                            text: "{!! trans('frontend.comment_disable') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_contact_form')[0].reset();
                        grecaptcha.reset();
                    }

                },


                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key).css('border-color', '#F64E60');
                        $('#' + key + '_error').text(value[0]);
                    }); //end each

                }, // end error


            }); //end ajax
        }); //end submit
    </script>
@endpush
