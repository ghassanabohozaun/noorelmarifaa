@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section>
        <div class="mt-6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                @livewire('dashboard.child.create-child', compact('governorates', 'cities'))
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
