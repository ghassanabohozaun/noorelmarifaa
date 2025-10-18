<!DOCTYPE html>
<html class="loading"
    @if (Config::get('app.locale') == 'ar') lang="ar" data-textdirection="rtl" @else  lang="en" data-textdirection="ltr" @endif>

<head>
    @include('layouts.dashboard.app-parts._head')
    <style>
        .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
            padding: 1.8rem 1rem;
            line-height: 23px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.4rem;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d2d6da;
            appearance: none;
            border-radius: 0.5rem;
            transition: box-shadow 0.15s ease, border-color 0.15s ease;
        }

        @if (Lang() == 'ar')
            select {
                appearance: none;
                /* Hide default browser styling */
                -webkit-appearance: none;
                -moz-appearance: none;
                background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: left 0.75rem center;
                background-size: 1rem;
                padding-right: 2rem;
                /* Ensure space for the arrow */
            }
        @else
            select {
                appearance: none;
                /* Hide default browser styling */
                -webkit-appearance: none;
                -moz-appearance: none;
                background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='currentColor' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right 0.75rem center;
                background-size: 1rem;
                padding-right: 2rem;
                /* Ensure space for the arrow */
            }
        @endif

        .text-danger {
            font-size: 10px;
        }

        .form-control {
            font-size: 0.775rem;
        }
    </style>
    @stack('style')
</head>

<body class="vertical-layout vertical-menu-modern" style="font-family: 'Tajawal', sans-serif;">

    @include('layouts.children.app-parts._header')


    @yield('content')

    {{-- @include('layouts.dashboard.app-parts._footer') --}}
    @include('layouts.dashboard.app-parts._scripts')
    @stack('scripts')
</body>

</html>
