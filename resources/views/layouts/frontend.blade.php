<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ !empty($title) ? $title : trans('frontend.home') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metaTags')

    <!-- Stylesheets -->
    <link href="{!! asset('frontend/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/slick.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/responsive.css') !!}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{!! asset('frontend/css/color-switcher-design.css') !!}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{!! asset('frontend/css/color-themes/default-theme.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/my-style.css') !!}" rel="stylesheet">
    @if (Lang() == 'ar')
        <link href="{!! asset('frontend/css/style_basic_rtl.css') !!}" rel="stylesheet">
        <link href="{!! asset('frontend/css/style_rtl.css') !!}" rel="stylesheet">
        <link href="{!! asset('frontend/css/media_rtl.css') !!}" rel="stylesheet">
    @else
        <link href="{!! asset('frontend/css/style_ltr.css') !!}" rel="stylesheet">
        <link href="{!! asset('frontend/css/media_ltr.css') !!}" rel="stylesheet">
    @endif

    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('uploads/settings/' . setting()->favicon) !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('uploads/settings/' . setting()->favicon) !!}" type="image/x-icon">


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{!! asset('frontend/js/respond.js') !!}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper @if (Lang() == 'ar') rtl @endif">

        <!-- Preloader-->
        <div class="preloader"></div>

        <!-- Main Header-->
        @include('frontend.includes.header')
        <!--End Main Header -->


        @yield('content')

        <!--Main Footer-->
        @include('frontend.includes.footer')
        <!--End Main Footer-->
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </div>

    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{!! route('index') !!}">
                                    <img src="{!! asset('frontend/images/nma_logo.png') !!}" alt="{!! asset('frontend/images/nma_logo.png') !!}"
                                        title="{!! trans('frontend.logo') !!}" />
                                </a>
                            </div>
                            <div class="content-box">
                                <h2>{!! trans('frontend.about_us') !!}</h2>
                                <p class="text my_lead">
                                    {!! setting()->description !!}
                                </p>
                            </div>
                            <div class="contact-info">
                                <h2>{!! trans('frontend.contact_info') !!}</h2>
                                <ul class="list-style-one">
                                    <li>
                                        <span class="icon flaticon-map-1"></span>
                                        {!! Lang() == 'ar' ? setting()->site_address_ar : setting()->address_en !!}
                                    </li>
                                    <li><span class="icon flaticon-telephone"></span>{!! setting()->mobile !!}</li>
                                    <li><span class="icon flaticon-message-1"></span>{!! setting()->email !!}</li>
                                    <li><span class="icon flaticon-timetable"></span>{!! trans('frontend.week_days') !!}
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook">
                                    <a href="{!! setting()->facebook !!}" class="fab fa-facebook-f" target="_blank"></a>
                                </li>
                                <li class="twitter">
                                    <a href="{!! setting()->twitter !!}" class="fab fa-twitter" target="_blank"></a>
                                </li>
                                <li class="linkedin">
                                    <a href="{!! setting()->email !!}" class="fas fa-envelope-open"></a>
                                </li>
                                <li class="instagram">
                                    <a href="{!! setting()->instegram !!}" class="fab fa-instagram" target="_blank"></a>
                                </li>
                                <li class="youtube"><a href="{!! setting()->youtube !!}" class="fab fa-youtube"
                                        target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


    <!-- xs modal -->
    <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
        <div class="xs-search-panel">
            <form action="#" method="POST" class="xs-search-group">
                <input type="search" class="form-control" name="search" id="search" autocomplete="off"
                    placeholder="{!! trans('frontend.search') !!}">
                <button type="button" class="search-button">
                    <i class="icon flaticon-magnifying-glass-1"></i>
                </button>
            </form>
        </div>
    </div><!-- End xs modal -->
    <!-- end language switcher start -->

    <script src="{!! asset('frontend/js/jquery.js') !!}"></script>
    <script src="{!! asset('frontend/js/popper.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.fancybox.js') !!}"></script>
    <script src="{!! asset('frontend/js/appear.js') !!}"></script>
    <script src="{!! asset('frontend/js/owl.js') !!}"></script>
    <script src="{!! asset('frontend/js/wow.js') !!}"></script>
    <script src="{!! asset('frontend/js/slick.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery-ui.js') !!}"></script>
    <script src="{!! asset('frontend/js/nav-tool.js') !!}"></script>
    <script src="{!! asset('frontend/js/jquery.magnific-popup.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/main.js') !!}"></script>
    <script src="{!! asset('frontend/js/script.js') !!}"></script>
    <script src="{!! asset('frontend/js/color-settings.js') !!}"></script>
    <script src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>

    @stack('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('css')
</body>

</html>
