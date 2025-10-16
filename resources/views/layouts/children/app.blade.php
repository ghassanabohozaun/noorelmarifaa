<!DOCTYPE html>
<html
    @if (Lang() == 'ar') lang="ar" data-textdirection="rtl" dir="rtl" @else  lang="en" data-textdirection="ltr"   dir="ltr" @endif>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('uploads/settings/' . setting()->favicon) !!}">
    <link rel="icon" type="image/png" href="{!! asset('uploads/settings/' . setting()->favicon) !!}">
    <title>
        {!! __('children.children') !!} | @yield('title')
    </title>
    <!-- Nucleo Icons -->
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->

    <link id="pagestyle" href="{!! asset('assets/children') !!}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link id="pagestyle" href="{!! asset('assets/children') !!}/assets/css/my-style.css" rel="stylesheet" />


    @stack('style')
</head>

<body class="g-sidenav-show  {!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}  bg-gray-100">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute py-1 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{!! route('child.welcome') !!}">
                            {!! setting()->site_name !!}
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                {{-- <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="../pages/dashboard.html">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Dashboard
                                    </a>
                                </li> --}}



                                @if (!child()->check())
                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="{!! route('child.get.register') !!}">
                                            <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                            {!! __('children.new_register') !!}
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="{!! route('child.get.login') !!}">
                                            <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                            {!! __('children.previous_register') !!}
                                        </a>
                                    </li>
                                @endif


                                @if (child()->check())
                                    <li class="nav-item active">
                                        <a class="nav-link me-2 active" href="{!! route('child.children.show', child()->user()->id) !!}">
                                            <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                            {!! __('children.show_child') !!}
                                        </a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link me-2 active" href="{!! route('child.children.edit', child()->user()->id) !!}">
                                            <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                            {!! __('children.update_child') !!}
                                        </a>
                                    </li>
                                    {{-- <form action="{!! route('child.logout') !!}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" class="nav-link me-2" style="cursor: pointer">
                                            <i class="ft-power"></i> {!! __('auth.logout') !!}
                                        </button>
                                    </form> --}}

                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="{!! route('child.logout') !!}">
                                            <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                            {!! __('auth.logout') !!}
                                        </a>
                                    </li>
                                @endif

                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="nav-item" style="justify-content : end">
                                        <a class="nav-link me-2 " style="justify-content : center"
                                            hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            @if ($localeCode != Lang())
                                                <span style="padding: 10px ;font-size: 12px">
                                                    {{ $properties['native'] }}
                                                </span>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <!-- main -->
    <main class="main-content mt-0">
        @yield('content')
    </main>
    <!-- End main -->

    <!--   Core JS Files   -->
    <script src="{!! asset('assets/children') !!}/assets/js/core/popper.min.js"></script>
    <script src="{!! asset('assets/children') !!}/assets/js/core/bootstrap.min.js"></script>
    <script src="{!! asset('assets/children') !!}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{!! asset('assets/children') !!}/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script src="{!! asset('assets/children') !!}/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

    @stack('script')

</body>

</html>
