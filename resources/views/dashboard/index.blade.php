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
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('dashboard.dashboard') !!}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.index') !!}">
                                        {!! __('dashboard.home') !!}
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end: content header left-->
            </div> <!-- end :content header -->

            <!-- begin: staticstics -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-user-following  info font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! adminCount() !!}</h3>
                                        <span>{!! __('children.admins_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-users primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! childCount() !!}</h3>
                                        <span>{!! __('children.children_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-user dark font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! childMaleCount() !!}</h3>
                                        <span>{!! __('children.male_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-user-female warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! childFemaleCount() !!}</h3>
                                        <span>{!! __('children.female_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pointer success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! governorateCount() !!}</h3>
                                        <span>{!! __('children.governorates_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pointer danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{!! cityCount() !!}</h3>
                                        <span>{!! __('children.cities_count') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: staticstics -->

            <!--begin::chart-->
            <div class="card card-custom gutter-b">

                <div class="card-body py-2" style="">
                    <div class="container-fluid">
                        <div class="row">

                            <!--begin::flight reservations chart-->
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <div style="width: 100% ; margin: auto">
                                        <canvas id="barChart1" width="1100" height="600"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end::flight reservations chart-->

                            <!--begin::ticket reservations charts -->
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <div style="width: 100% ; margin: auto">
                                        <canvas id="barChart2" width="1100" height="600"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end::ticket reservations chart-->

                        </div>
                    </div>
                </div>

                <!--end::Body-->
            </div>
            <!--end::chart-->



            <!-- begin: children -->
            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- begin: card header -->
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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


                                        <!--begin::Body-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="table-responsive ">
                                                    <table class="table"
                                                        style="text-align: center;vertical-align: middle;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">{!! __('children.picture_of_the_orphan_child') !!}</th>
                                                                <th scope="col">{!! __('children.full_name') !!}</th>
                                                                <th scope="col">{!! __('children.personal_id') !!}</th>
                                                                <th scope="col">{!! __('children.birthday') !!}</th>
                                                                <th scope="col">{!! __('children.gender') !!}</th>
                                                                <th scope="col">{!! __('children.class') !!}</th>
                                                                <th scope="col">{!! __('children.authorized_contact_number') !!}</th>
                                                                <th scope="col">{!! __('children.created_at') !!}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($children as $key => $child)
                                                                <tr>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $loop->iteration !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        @if ($child->childFile->picture_of_the_orphan_child)
                                                                            <img src="{{ asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) }}"
                                                                                class="img-fluid img-thumbnail table-image" />
                                                                        @else
                                                                            <img src="{{ asset('adminBoard/images/images-empty.png/') }}"
                                                                                class="img-fluid img-thumbnail table-image " />
                                                                        @endif
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->childFullName() !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->personal_id !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->birthday !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->childGender() !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->childClass() !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->authorized_contact_number !!}
                                                                    </td>
                                                                    <td class="text-center" style="vertical-align:middle">
                                                                        {!! $child->created_at !!}
                                                                    </td>
                                                                </tr>

                                                            @empty
                                                                <tr>
                                                                    <td colspan="8" class="text-center">
                                                                        {!! __('children.no_childern_found') !!}</td>
                                                                </tr>
                                                            @endforelse

                                                        </tbody>
                                                    </table>
                                                    {{-- <div class="float-right">
                                                        {!! $children->links() !!}
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Body-->
                                    </div>
                                </div>
                                <!-- end: card content -->
                            </div>
                        </div> <!-- end: card  -->
                    </div><!-- end: row  -->
                </section><!-- end: sections  -->
            </div>
            <!-- end: children  -->


        </div> <!-- end: content wrapper  -->
    </div><!-- end: content app  -->
@endsection
@push('scripts')
    <script type="text/javascript" src="{!! asset('assets/dashbaord/js/scripts/Chart.bundle.min.js') !!}"></script>
    <script type="text/javascript">
        $(function() {
            var maleRegistrationData = <?php echo json_encode($maleRegistrationData); ?>;
            var barCanvas = $("#barChart1");
            var barChart = new Chart(barCanvas, {
                type: 'line',
                data: {
                    labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov',
                        'dec'
                    ],
                    datasets: [{
                        label: '{!! trans('children.male_children') !!}',
                        data: maleRegistrationData,
                        backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'violet',
                            'purple', 'pink', 'indigo', 'silver', 'gold', 'brown'
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxis: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })
        });


        $(function() {
            var femaleRegistrationData = <?php echo json_encode($femaleRegistrationData); ?>;
            var barCanvas = $("#barChart2");
            var barChart = new Chart(barCanvas, {
                type: 'line', //bar
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: '{!! trans('children.female_children') !!}',
                        data: femaleRegistrationData,
                        backgroundColor: ['gold', 'green', 'blue', 'violet', 'red', 'orange',
                            'yellow', 'pink', 'indigo', 'silver',
                            'purple', 'brown'
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxis: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })
        });
    </script>
@endpush
