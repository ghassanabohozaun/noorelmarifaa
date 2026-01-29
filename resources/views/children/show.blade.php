@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section id="card-header-options">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12 col-sm-12 mb-2 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! __('children.show_child') !!}
                            </h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">

                                <div class="col-auto">
                                    <div class="mb-2">
                                        @if ($child->childFile->picture_of_the_orphan_child != null)
                                            <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="profile_image"
                                                class="border-radius-lg shadow-sm rounded" style="width: 150px">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        @include('dashboard.children.profile.tabs')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
