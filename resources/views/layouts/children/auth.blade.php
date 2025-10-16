<!DOCTYPE html>
<html
    @if (Lang() == 'ar') lang="ar" data-textdirection="rtl" @else  lang="en" data-textdirection="ltr" @endif>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('uploads/settings/' . setting()->favicon) !!}">
    <link rel="icon" type="image/png" href="{!! asset('uploads/settings/' . setting()->favicon) !!}">
    <title>
        {!! __('children.children') !!} | @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{!! asset('assets/children') !!}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->

    <link id="pagestyle" href="{!! asset('assets/children') !!}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link id="pagestyle" href="{!! asset('assets/children') !!}/assets/css/my-style.css" rel="stylesheet" />

    @stack('style')
</head>

<body class="g-sidenav-show  bg-gray-100" style="direction: {!! Lang() == 'ar' ? 'rtl' : 'ltr' !!};">
    <div class="container top-0 mb-7">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">

                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 font-size-10" style="font-size: large"
                            href="{!! route('child.welcome') !!}">
                            <img src="{!! asset('assets/children/assets/img/logo.png') !!}" style="width: 50px">
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

                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    @if (Lang() == 'ar')
                                        <a href="/en/child/welcome"
                                            class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">{!! __('general.en') !!}</a>
                                    @else
                                        <a href="/ar/child/welcome"
                                            class="btn btn-sm btn-round mb-0 me-1  bg-gradient-dark">{!! __('general.ar') !!}</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        @yield('content')
    </main>

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
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    {!! NoCaptcha::renderJs() !!}

    @stack('style')

</body>

</html>
