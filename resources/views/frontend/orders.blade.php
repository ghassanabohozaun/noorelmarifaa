@extends('layouts.frontend')
@section('title') {!! $title !!} @endsection
@section('metaTags')
    <meta name="description"
          content="{!! Lang()=='ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords"
          content="{!! Lang()=='ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
@endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({!! asset('frontend/images/background/8.jpg') !!});">
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



    <!-- Contact Section -->
    <section class="contact-section"
             style="background-image: url({!! asset('frontend/images/background/map-pattern-1.png') !!})">
        <div class="auto-container">
            <!-- Default Form -->
            <div class="default-form contact-form">
                <form method="POST" action="{!! route('add.order') !!}" id="add_orders_form">
                    @csrf
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">

                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="full_name" id="full_name" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_full_name') !!}">
                                <span class="form-text text-danger" id="full_name_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="identification" id="identification" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_identification') !!}">
                                <span class="form-text text-danger" id="identification_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="birthday" id="birthday" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_birthday') !!}">
                                <span class="form-text text-danger" id="birthday_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="mobile_number" id="mobile_number" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_mobile_number') !!}">
                                <span class="form-text text-danger" id="mobile_number_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <select name="gender" id="gender">
                                    <option value="male">{!! trans('frontend.male') !!}</option>
                                    <option value="female">{!! trans('frontend.female') !!}</option>
                                </select>
                                <span class="form-text text-danger" id="gender_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <select name="order_type" id="order_type">
                                    <option value="employ_order">{!! trans('frontend.employ_order') !!}</option>
                                    <option value="volunteer_order">{!! trans('frontend.volunteer_order') !!}</option>
                                </select>
                                <span class="form-text text-danger" id="order_type_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="qualification" id="qualification" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_qualification') !!}">
                                <span class="form-text text-danger" id="qualification_error"></span>
                            </div>


                        </div>

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">

                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="specialization" id="specialization" autocomplete="off"
                                       value="" placeholder="{!! trans('frontend.enter_specialization') !!}">
                                <span class="form-text text-danger" id="specialization_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <textarea name="address" id="address" autocomplete="off"
                                          placeholder="{!! trans('frontend.enter_address') !!}"></textarea>
                                <span class="form-text text-danger" id="address_error"></span>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <textarea name="notes" id="notes" autocomplete="off"
                                          placeholder="{!! trans('frontend.enter_notes') !!}"></textarea>
                                <span class="form-text text-danger" id="notes_error"></span>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                        {!! NoCaptcha::display() !!}
                        <span class="form-text text-danger" id="g-recaptcha-response_error"></span>
                    </div>
                    <div class="form-group  col-lg-6 col-md-6 col-sm-6">
                        <button type="submit" class="theme-btn btn-style-one btn-block btn-circle">
                            <span class="txt">{!! trans('frontend.add') !!}
                            </span>
                        </button>
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


        $('#add_orders_form').on('submit', function (e) {
            e.preventDefault();
            //////////////////////////////////////////////////////////////////////
            $('#full_name_error').text('');
            $('#identification_error').text('');
            $('#birthday_error').text('');
            $('#mobile_number_error').text('');
            $('#gender_error').text('');
            $('#order_type_error').text('');
            $('#qualification_error').text('');
            $('#specialization_error').text('');
            $('#address_error').text('');
            $('#notes_error').text('');
            $('#g-recaptcha-response_error').text('');

            $('#full_name').css('border-color', '');
            $('#identification').css('border-color', '');
            $('#birthday').css('border-color', '');
            $('#mobile_number').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#order_type').css('border-color', '');
            $('#qualification').css('border-color', '');
            $('#specialization').css('border-color', '');
            $('#address').css('border-color', '');
            $('#notes').css('border-color', '');
            $('#g-recaptcha-response').css('border-color', '');

            //////////////////////////////////////////////////////////////////////

            var data = new FormData(this);
            var url = $(this).attr('action');
            var type = $(this).attr('method');

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                success: function (data) {
                    console.log(data);
                    if (data.status == true) {
                        swal({
                            icon: "success",
                            text: "{!! trans('frontend.success_add_order_message') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_orders_form')[0].reset();
                        grecaptcha.reset();

                    }
                    if (data.status == false) {
                        swal({
                            icon: "error",
                            text: "{!! trans('frontend.forms_disable') !!}",
                            buttons: false,
                            timer: 3000,
                        });
                        $('#add_orders_form')[0].reset();
                        grecaptcha.reset();
                    }
                },//end success
                error: function (reject) {

                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, value) {
                        $('#' + key + "_error").text(value[0]);
                        $('#' + key).css('border-color', '#F64E60');
                    });

                    $('html, body').animate({
                        scrollTop: "520px"
                    }, 2500);
                },//end error

            });//end ajax
        });//end submit


    </script>
@endpush
