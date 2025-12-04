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
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('uploadCenter.upload_center') !!}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.index') !!}">
                                        {!! __('dashboard.home') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        {!! __('uploadCenter.upload_center') !!}
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
                        <button type="button" class="btn btn-info  btn-glow px-2" data-toggle="modal"
                            data-target="#createFileModal">
                            {!! __('uploadCenter.create_new_file') !!}
                        </button>
                    </div>
                </div>
                <!-- end: content header right-->

            </div> <!-- end :content header -->

            <!-- begin: content body -->
            <div class="row" style="display: flex ; justify-content: center;">
                <div class="col-md-12">
                    <div class="content-body">

                        <section id="basic-form-layouts">
                            <div class="row match-height">
                                <div class="col-md-12">
                                    <div class="card">
                                        <!-- begin: card header -->
                                        <div class="card-header">
                                            <h4 class="card-title" id="basic-layout-colored-form-control">
                                                {!! __('uploadCenter.show_all_files') !!}
                                            </h4>
                                            <a class="heading-elements-toggle"><i
                                                    class="la la-ellipsis-v font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end: card header -->

                                        <!-- begin: card content -->
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table" id='myTable'>
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>{!! __('uploadCenter.file_name') !!}</th>
                                                                <th>{!! __('uploadCenter.file_mimes_type') !!}</th>
                                                                <th style="text-align: center">{!! __('general.actions') !!}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($files as $file)
                                                                <tr>
                                                                    <th class="col-lg-1">{!! $loop->iteration !!} </th>
                                                                    <td class="col-lg-5">{!! $file->file_name !!}</td>
                                                                    <td class="col-lg-5">{!! $file->file_mimes_type !!}</td>
                                                                    <td class="col-lg-1">
                                                                        @include('dashboard.upload-center.parts.actions')
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="4" class="text-center">
                                                                        {!! __('uploadCenter.no_files_found') !!}
                                                                    </td>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>

                                                    </table>
                                                    <div class="float-right">
                                                        {!! $files->links() !!}
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- end: card content -->
                                    </div>
                                </div> <!-- end: card  -->
                            </div><!-- end: row  -->
                        </section><!-- end: sections  -->
                    </div>
                </div>
            </div>
            <!-- end: content body  -->
        </div> <!-- end: content wrapper  -->
    </div><!-- end: content app  -->

    @include('dashboard.upload-center.modals.create')
@endsection


@push('scripts')
    <script type="text/javascript">
        // delete upload center
        $('body').on('click', '.delete_file_btn', function(e) {
            e.preventDefault();
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
                        url: '{!! route('dashboard.uploadCenter.destroy') !!}',
                        data: {
                            id,
                            id
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(data) {
                            $('#myTable').load(location.href + (' #myTable'));
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


        $('body').on('click', '.copy_file_full_path', function(e) {
            e.preventDefault();


            var id = $(this).data('id');

            $.get("{{ route('dashboard.uploadCenter.get.file.by.id') }}", {
                id,
                id
            }, function(data) {



                if (data.status == true) {

                    // Start clipboard
                    var copyText = "{{ url('/') }}/uploads/upload-center/" + data.data
                        .full_path_after_upload;

                    var el = document.createElement('textarea');
                    el.value = copyText;
                    el.setAttribute('readonly', '');
                    el.style = {
                        position: 'absolute',
                        left: '-9999px'
                    };
                    document.body.appendChild(el);
                    el.select();
                    document.execCommand('copy');
                    document.body.removeChild(el);
                    flasher.success("{!! __('general.copied') !!}");~
                }
            });

        });
    </script>
@endpush
