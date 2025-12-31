@extends('layouts.dashboard.app')
@section('title')
    {!! $title !!}
@endsection
@push('style')
    <style>
        .table-container {
            position: relative;
        }

        #loading-indicator {
            font-size: 15px;
            font-weight: bolder;
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            background-color: rgba(117, 112, 112, 0.8);
            padding: 20px;
            border-radius: 5px;
            color: white
        }

        #spinner {
            font-size: 20px;
        }
    </style>
@endpush
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <!-- begin: content header -->
            <div class="content-header row">

                <!-- begin: content header left-->
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('children.children') !!}</h3>
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

                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end: content header left-->

                <!-- begin: content header right-->
                <div class="content-header-right col-md-6 col-12">
                    <div class="float-md-right mb-1">
                        <a href="{!! route('dashboard.children.create') !!}" class="btn btn-info  btn-glow px-2">
                            {!! __('children.create_new_child') !!}
                        </a>

                    </div>
                </div>
                <!-- end: content header right-->

            </div> <!-- end :content header -->

            <!-- begin: content body -->
            <div class="row" style="display: flex ; justify-content: center;">
                <div class="col-md-12">
                    <div class="content-body">
                        <!-- begin: sections  -->
                        <section id="basic-form-layouts">
                            <div class="row match-height">
                                <div class="col-md-12">

                                    @include('dashboard.children.partials._search')

                                    <div class="table-container">
                                        <div id="loading-indicator" class="loader">
                                            <!-- You can use text, an image, or CSS-only spinners -->
                                            <i class="la la-spinner spinner" id="spinner"></i> {!! __('general.loading') !!}
                                            <!-- or <img src="loading.gif" alt="Loading..."> -->
                                        </div>
                                        <div id="table_data">
                                            @include('dashboard.children.partials._table', [
                                                'children' => $children,
                                            ])
                                        </div>
                                    </div>

                                </div><!-- end: row  -->
                        </section>
                        <!-- end: sections  -->
                    </div>
                </div>
            </div>
            <!-- end: content body  -->
        </div> <!-- end: content wrapper  -->
    </div><!-- end: content app  -->
@endsection


@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            let page = 1;

            // fetch data
            function fetch_data(page) {
                var gender = $('#gender').val();
                var first_name_ar = $('#first_name_ar').val();
                var father_name_ar = $('#father_name_ar').val();
                var grand_father_name_ar = $('#grand_father_name_ar').val();
                var family_name_ar = $('#family_name_ar').val();

                var first_name_en = $('#first_name_en').val();
                var father_name_en = $('#father_name_en').val();
                var grand_father_name_en = $('#grand_father_name_en').val();
                var family_name_en = $('#family_name_en').val();

                var personal_id = $('#personal_id').val();
                var gender = $('#gender').val();
                var classification = $('#classification').val();
                var health_status = $('#health_status').val();
                var governoate_id = $('#governoate_id').val();
                var city_id = $('#city_id').val();
                var guardian_personal_id = $('#guardian_personal_id').val();


                $.ajax({
                    url: "{{ route('dashboard.children.index') }}?page=" + page,
                    data: {
                        first_name_ar: first_name_ar,
                        father_name_ar: father_name_ar,
                        grand_father_name_ar: grand_father_name_ar,
                        family_name_ar: family_name_ar,
                        first_name_en: first_name_en,
                        father_name_en: father_name_en,
                        grand_father_name_en: grand_father_name_en,
                        family_name_en: family_name_en,
                        personal_id: personal_id,
                        gender: gender,
                        classification: classification,
                        health_status: health_status,
                        governoate_id: governoate_id,
                        city_id: city_id,
                        guardian_personal_id: guardian_personal_id
                    },
                    beforeSend: function() {
                        // Show the loading indicator before the request is sent
                        $('#loading-indicator').show();
                        // Optional: clear previous table data
                        $('#data-table tbody').empty();
                    },
                    success: function(data) {
                        $('#table_data').html(data);
                    },
                    complete: function() {
                        // Hide the loading indicator when the request is complete (whether success or error)
                        $('#loading-indicator').hide();
                    },
                });
            }

            // Handle pagination link clicks
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });



            // search
            $('body').on('click', '#children_search_btn', function(e) {
                fetch_data(1);
            })


            // reset
            $('body').on('click', '#children_reset_btn', function(e) {
                e.preventDefault();
                $('#first_name_ar').val('');
                $('#father_name_ar').val('');
                $('#grand_father_name_ar').val('');
                $('#family_name_ar').val('');

                $('#first_name_en').val('');
                $('#father_name_en').val('');
                $('#grand_father_name_en').val('');
                $('#family_name_en').val('');

                $('#personal_id').val('');
                $('#gender').val('')
                $('#classification').val('');
                $('#health_status').val('');
                $('#governoate_id').val('');
                $('#city_id').val('');
                $('#guardian_personal_id').val('');
                fetch_data(1);
            });

            // Handle search input (e.g., on keyup)
            $('#search').on('keyup', function() {
                fetch_data(1); // Reset to page 1 on new search
            });

            // governoate change
            $('#governoate_id').on('change', function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: '{!! route('dashboard.children.get.cities', ':id') !!}'.replace(':id', id),
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#city_id').empty().append(
                                '<option value=""> {!! __('users.select') !!} {!! __('users.city_id') !!}</option>'
                            );
                            $.each(data, function(key, value) {
                                $('#city_id').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                            $('#city_id').prop('disabled', false);
                        }
                    });
                } else {
                    $('#city_id').empty().append(
                            '<option value=""> {!! __('users.select') !!} {!! __('users.city_id') !!}</option>')
                        .prop(
                            'disabled', true);
                }
            });


            // delete
            $('body').on('click', '.delete_child_btn', function(e) {
                e.preventDefault();

                var $tr = $(this).closest('tr');
                var id = $(this).data('id');


                swal({
                    title: "{{ __('general.ask_delete_record') }}",
                    icon: "warning",
                    buttons: {
                        cancel: {
                            text: "{{ __('general.no') }}",
                            value: null,
                            visible: true,
                            className: "btn-danger",
                            closeModal: false,
                        },
                        confirm: {
                            text: "{{ __('general.yes') }}",
                            value: true,
                            visible: true,
                            className: "btn-info",
                            closeModal: false
                        }
                    }
                }).then(isConfirm => {
                    if (isConfirm) {
                        $.ajax({
                            url: '{!! route('dashboard.children.destroy', ':id') !!}'.replace(':id', id),
                            data: {
                                '_token': "{!! csrf_token() !!}"
                            },
                            type: 'DELETE',
                            dataType: 'json',
                            success: function(data) {

                                $tr.fadeOut(700, function() {
                                    $tr.remove();
                                });

                                if (data.status == true) {
                                    swal({
                                        title: "{!! __('general.deleted') !!} ",
                                        text: "{!! __('general.delete_success_message') !!} ",
                                        icon: "success",
                                        buttons: {
                                            confirm: {
                                                text: "{!! __('general.yes') !!}",
                                                visible: true,
                                                closeModal: true
                                            }
                                        }
                                    });
                                    // setTimeout(function() {
                                    //     window.location.reload();
                                    // }, 1000)
                                } else if (data.status == false) {
                                    swal({
                                        title: "{!! __('general.warning') !!} ",
                                        text: "{!! __('general.delete_error_message') !!} ",
                                        icon: "warning",
                                        buttons: {
                                            confirm: {
                                                text: "{!! __('general.yes') !!}",
                                                visible: true,
                                                closeModal: true
                                            }
                                        }
                                    });
                                }
                            }, //end success
                        });

                    } else {
                        swal({
                            title: "{!! __('general.cancelled') !!} ",
                            text: "{!! __('general.delete_error_message') !!} ",
                            icon: "error",
                            buttons: {
                                confirm: {
                                    text: "{!! __('general.yes') !!}",
                                    visible: true,
                                    closeModal: true
                                }
                            }
                        });
                    }
                });


            });

            //  change status
            var statusSwitch = false;
            $('body').on('change', '.change_status', function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                if ($(this).is(':checked')) {
                    statusSwitch = 1;
                } else {
                    statusSwitch = 0;
                }

                $.ajax({
                    url: "{{ route('dashboard.children.change.status') }}",
                    data: {
                        statusSwitch: statusSwitch,
                        id: id
                    },
                    type: 'post',
                    dataType: 'JSON',
                    success: function(data) {

                        if (data.status == true) {
                            flasher.success("{!! __('general.change_status_success_message') !!}");
                        } else {
                            flasher.error("{!! __('general.change_status_error_message') !!}");
                        }
                    }, //end success
                })
            });

        });
    </script>
@endpush
