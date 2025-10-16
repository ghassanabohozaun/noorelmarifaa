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
                                    @include('dashboard.children.partials._table')
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
        var lang = '{{ Lang() }}';

        loadData();

        function loadData(personal_id = '', gender = '', classification = '', health_status = '', governoate_id = '',
            city_id = '') {
            // yajra tables
            $('#yajra-datatable').DataTable({
                // dom: 'Bfrtip',
                processing: true,
                serverSide: true,
                colReorder: true,
                fixedHeader: true,
                "bDestroy": true,
                "bFilter": false,

                // rowReorder: {
                //     update: false,
                //     // selector: 'tr',
                //     selector: "td:not(:first-child):not(:nth-child(4)):not(:nth-child(13)):not(:nth-child(14))",
                // },
                // select: true,
                // responsive: true,
                // scrollCollapse: true,
                // scroller: true,
                // scrollY: 900,
                responsive: {
                    details: {
                        display: DataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data();
                                console.log(data);
                                return '{!! __('general.detalis_for') !!} : ' + data['full_name'];
                            }
                        }),
                        renderer: DataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },

                // ajax: '{!! route('dashboard.children.get.all') !!}',

                ajax: {
                    url: '{!! route('dashboard.children.get.all') !!}',
                    data: {
                        personal_id: personal_id,
                        gender: gender,
                        classification: classification,
                        health_status: health_status,
                        governoate_id: governoate_id,
                        city_id: city_id
                    },
                    beforeSend: function() {
                        // Here, manually add the loading message.
                        $('#my_mawhobs_data_table > tbody').html(
                            '<tr class="odd">' +
                            '<td valign="top" colspan="6" class="dataTables_empty"></td>' +
                            '</tr>'
                        );
                    }
                },

                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        orderable: false,
                    },
                    {
                        data: 'full_name',
                        name: 'full_name',
                    },
                    {
                        data: 'personal_id',
                        name: 'personal_id',
                    },

                    {
                        data: 'birthday',
                        name: 'birthday',
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                    },
                    {
                        data: 'classification',
                        name: 'classification',
                    },
                    {
                        data: 'health_status',
                        name: 'health_status',
                    },
                    {
                        data: 'governoate_id',
                        name: 'governoate_id',
                    },
                    {
                        data: 'city_id',
                        name: 'city_id',
                    },
                    {
                        data: 'authorized_contact_number',
                        name: 'authorized_contact_number',
                    },
                    // {
                    //     data: 'backup_contact_number',
                    //     name: 'backup_contact_number',
                    // },

                    {
                        data: 'status_manage',
                        name: 'status_manage',
                        searchable: false,
                        orderable: false,
                    },

                    {
                        data: 'actions',
                        searchable: false,
                        orderable: false,
                    }
                ],

                layout: {
                    // 'colvis',
                    topStart: {
                        buttons: ['copy', 'print', 'excel', 'pdf']
                    }
                },
                language: lang === 'ar' ? {
                    url: '{!! asset('vendor/datatables/ar.json') !!}',
                } : {},

                buttons: [{
                        extend: 'colvis',
                        className: 'btn btn-default',
                        exportOptions: {
                            // columns: [0, 1, 2],
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'copy',
                        className: 'btn btn-default',
                        exportOptions: {
                            // columns: [0, 1, 2],
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-default',
                        exportOptions: {
                            // columns: [0, 1, 2],
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-default',
                        exportOptions: {
                            // columns: [0, 1, 2],
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-default',
                        exportOptions: {
                            // columns: [0, 1, 2],
                            columns: ':not(:last-child)',
                        }
                    },

                ]

            });
        }


        // search
        $('body').on('click', '#children_search_btn', function(e) {
            e.preventDefault();
            var personal_id = $('#personal_id').val();
            var gender = $('#gender').val();
            var classification = $('#classification').val();
            var health_status = $('#health_status').val();
            var governoate_id = $('#governoate_id').val();
            var city_id = $('#city_id').val();

            loadData(personal_id, gender, classification, health_status, governoate_id, city_id);
        })


        // reset
        $('body').on('click', '#children_reset_btn', function(e) {
            e.preventDefault();
            $('#personal_id').val('');
            $('#gender').val('')
            $('#classification').val('');
            $('#health_status').val('');
            $('#governoate_id').val('');
            $('#city_id').val('');

            loadData();
        });

        // delete
        $('body').on('click', '.delete_child_btn', function(e) {
            e.preventDefault();
            var currentPage = $('#yajra-datatable').DataTable().page();
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
                            $('#yajra-datatable').DataTable().page(currentPage).draw(false);
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

            var currentPage = $('#yajra-datatable').DataTable().page();
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

                    $('#yajra-datatable').DataTable().page(currentPage).draw(false);
                    if (data.status == true) {
                        flasher.success("{!! __('general.change_status_success_message') !!}");
                    } else {
                        flasher.error("{!! __('general.change_status_error_message') !!}");
                    }
                }, //end success
            })
        });
    </script>
@endpush
