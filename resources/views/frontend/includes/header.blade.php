<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Top Left-->
                @if (Lang() == 'en')
                    <div class="top-left col-lg-5 col-md-12 col-sm-12">
                        <ul>
                            <li>{!! trans('frontend.welcome_to_website') !!}</li>
                        </ul>
                    </div>
                @endif
                <!--Top Right-->
                <div class="top-right col-lg-7 col-md-12 col-sm-12">
                    <div class="question">{!! trans('frontend.you_have_any_question') !!}
                        <a href="tel:{!! setting()->mobile !!}">{!! setting()->mobile !!}</a>
                    </div>
                    <!--Social Box-->
                    <ul class="social-box">
                        <li>
                            <a href="{!! setting()->facebook !!}" target="_blank">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li><a href="mailto:{!! setting()->email_support !!}">
                                <span class="fab fa-google"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{!! setting()->instegram !!}" target="_blank">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{!! setting()->twitter !!}" target="_blank">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{!! setting()->youtube !!}" target="_blank">
                                <span class="fab fa-youtube"></span>
                            </a>
                        </li>
                    </ul>
                    <!--Social Box-->

                </div>

            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{!! route('index') !!}">
                            <img src="{!! asset('frontend/images/logo-en.png') !!}" alt="{!! asset('frontend/images/logo-en.png') !!}"
                                title="{!! trans('frontend.logo') !!}">
                        </a>
                    </div>
                </div>

                <div class="pull-right upper-right">
                    <div class="info-outer clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-home-1"></span></div>
                            <ul>
                                @if (Lang() == 'ar')
                                    <li><span>
                                            النصيرات
                                            <br />
                                            المخيم الجديد
                                        </span>
                                        <br>
                                    </li>
                                @else
                                    <li><span>
                                            Nusirate
                                            <br />
                                            New Camp
                                        </span>
                                        <br>
                                    </li>
                                @endif

                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-envelope"></span></div>
                            <ul>
                                <li>
                                    <span>
                                        {!! trans('frontend.palestine_gaza') !!}
                                        <br> {!! setting()->email !!}
                                    </span>


                                </li>
                            </ul>
                        </div>

                        <!--Info Box 'ArbFONTSBEINNormalAR' -->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-stopwatch"></span></div>
                            <ul>
                                <li>
                                    <span>
                                        {!! trans('frontend.working_hours') !!}
                                        <br> {!! trans('frontend.working_times') !!}
                                    </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">

                            <li class="current">
                                <a href="{!! route('index') !!}">
                                    {!! trans('frontend.home') !!}
                                </a>
                            </li>


                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.whom') !!}
                                </a>
                                <ul>
                                    @foreach (Whoms() as $whom)
                                        <li>
                                            <a href="{!! route('page', $whom->slug) !!}">
                                                {!! $whom->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.beneficiaries_guide') !!}
                                </a>
                                <ul>
                                    @foreach (Guides() as $guide)
                                        <li>
                                            <a href="{!! route('page', $guide->slug) !!}">
                                                {!! $guide->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.systems') !!}
                                </a>
                                <ul>
                                    @foreach (Systems() as $system)
                                        <li>
                                            <a href="{!! route('page', $system->slug) !!}">
                                                {!! $system->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.posts') !!}
                                </a>
                                <ul>
                                    @foreach (Departments() as $department)
                                        <li>
                                            <a href="{!! route('posts', $department->slug) !!}">
                                                {!! $department->name !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.reports') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('yearly.reports') !!}">
                                            {!! trans('frontend.yearly_report') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('monthly.reports') !!}">
                                            {!! trans('frontend.monthly_report') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.forms') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('orders') !!}">
                                            {!! trans('frontend.employ_and_volunteer_orders') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('services') !!}">
                                            {!! trans('frontend.aid_and_guarantees_services') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.medias') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('photos.gallery') !!}">
                                            {!! trans('frontend.photos_gallery') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('videos') !!}">
                                            {!! trans('frontend.videos_gallery') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{!! route('contact.us') !!}">{!! trans('frontend.contact_us') !!}</a></li>

                            @if (Lang() == 'ar')
                                <li><a href="/en">En</a></li>
                            @else
                                <li><a href="/ar">Ar</a></li>
                            @endif

                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Main Menu End-->
                    <div class="nav-box">
                        <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-2"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{!! route('index') !!}" class="img-responsive">
                    <img src=" {!! asset('frontend/images/logo_complete.jpg') !!}" width="195" height="160" alt="{!! asset('frontend/images/logo_complete.jpg') !!}"
                        title="{!! trans('frontend.logo') !!}">
                </a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li class="current">
                                <a href="{!! route('index') !!}">
                                    {!! trans('frontend.home') !!}
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.whom') !!}
                                </a>
                                <ul>
                                    @foreach (Whoms() as $whom)
                                        <li>
                                            <a href="{!! route('page', $whom->slug) !!}">
                                                {!! $whom->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.beneficiaries_guide') !!}
                                </a>
                                <ul>
                                    @foreach (Guides() as $guide)
                                        <li>
                                            <a href="{!! route('page', $guide->slug) !!}">
                                                {!! $guide->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.systems') !!}
                                </a>
                                <ul>
                                    @foreach (Systems() as $system)
                                        <li>
                                            <a href="{!! route('page', $system->slug) !!}">
                                                {!! $system->title !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.posts') !!}
                                </a>
                                <ul>
                                    @foreach (Departments() as $department)
                                        <li>
                                            <a href="{!! route('posts', $department) !!}">
                                                {!! $department->name !!}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.reports') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('yearly.reports') !!}">
                                            {!! trans('frontend.yearly_report') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('monthly.reports') !!}">
                                            {!! trans('frontend.monthly_report') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.forms') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('orders') !!}">
                                            {!! trans('frontend.employ_and_volunteer_orders') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('services') !!}">
                                            {!! trans('frontend.aid_and_guarantees_services') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">
                                    {!! trans('frontend.medias') !!}
                                </a>
                                <ul>
                                    <li>
                                        <a href="{!! route('photos.gallery') !!}">
                                            {!! trans('frontend.photos_gallery') !!}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('videos') !!}">
                                            {!! trans('frontend.videos_gallery') !!}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{!! route('contact.us') !!}">{!! trans('frontend.contact_us') !!}</a></li>

                            @if (Lang() == 'ar')
                                <li><a href="/en">En</a></li>
                            @else
                                <li><a href="/ar">Ar</a></li>
                            @endif

                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
