<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NMA</title></title>
    <!-- Stylesheets -->
    <link href="{!! asset('frontend/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/slick.css') !!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/responsive.css') !!}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{!! asset('frontend/css/color-switcher-design.css') !!}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{!! asset('frontend/css/color-themes/default-theme.css') !!}" rel="stylesheet">

    <link rel="shortcut icon" href="{!! asset(Storage::url(setting()->site_icon)) !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset(Storage::url(setting()->site_icon)) !!}" type="image/x-icon">
    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{!! asset('frontend/js/respond.js') !!}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!--Comming Soon-->
    <section class="comming-soon" style="background-image:url({!! asset('frontend/images/background/15.jpg') !!})">
        <div class="auto-container">
            <div class="content">
                <div class="content-inner">
                    <h2>We're Coming Soon...</h2>
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2021/1/13"></div></div>
                    <div class="text"> . الموقع تحت الصيانة. سنكون هنا قريباً مع موقع جديد رائع   </div>
                    <div class="text" style="font-size: 30px"> Website is under maintenance. </div>
                    <div class="text" style="font-size: 18px"> We'll be here soon with new awesome site </div>


                </div>
            </div>
        </div>
    </section>
    <!--End Comming Soon-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



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
<script src="{!! asset('frontend/js/jquery.countdown.js') !!}"></script>
<script src="{!! asset('frontend/js/script.js') !!}"></script>
<script src="{!! asset('frontend/js/color-settings.js') !!}"></script>

</body>
</html>
