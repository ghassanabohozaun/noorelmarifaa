@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section>
        <div class="page-header min-vh-90">
            <div class="container">

                <div class="row">
                    <div class="">
                        <div class="card  z-index-0 mt-2 col-xl-12 col-lg-12 col-sm-12 mt-6">
                            <div class="card-body">
                                @livewire('dashboard.child.edit-child', compact('ChildID', 'child', 'governoates', 'cities'))
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('style')
    @if (Lang() == 'ar')
        <link rel="stylesheet" href="{!! asset('assets/dashbaord/css-rtl/child-wizard.css') !!}" rel="stylesheet">
    @else
        <link rel="stylesheet" href="{!! asset('assets/dashbaord/css/child-wizard.css') !!}" rel="stylesheet">
    @endif
@endpush
