<footer class="main-footer"
        style="background-image:url( {!! asset('frontend/images/background/map-pattern.png') !!})">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="{!! route('index') !!}">
                                <img src="{!! asset('frontend/images/noor_footer_logo.gif') !!}"
                                     alt="{!! asset('frontend/images/noor_footer_logo.gif') !!}"
                                     title="{!! trans('frontend.logo') !!}">
                            </a>
                        </div>
                        <div class="text my_lead ">
                            {!! Lang() == 'ar' ? setting()->site_description_ar :setting()->site_description_en !!}
                        </div>
                        <!--Social Box-->
                        <ul class="social-box">
                            <li>
                                <a href="{!! setting()->site_facebook !!}" target="_blank">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li><a href="mailto:{!! setting()->site_gmail !!}">
                                    <span class="fab fa-google"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{!! setting()->site_instagram !!}" target="_blank">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{!! setting()->site_twitter !!}" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{!! setting()->site_youtube !!}" target="_blank">
                                    <span class="fab fa-youtube"></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            @php
                $postDepartments = App\Models\Department::where('status', 'enable')
                ->where('class', 'post')->get();
            @endphp
            <!--Footer Column-->
                <div class="footer-column col-lg-2 col-md-4 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h2>{!! trans('frontend.site_map') !!}</h2>
                        <ul class="footer-list">
                            <li><a href="{!! route('index') !!}">{!! trans('frontend.home') !!}</a></li>
                            @foreach($postDepartments as $postDepartment)
                                <li>
                                    @if(Lang()=='ar')
                                        <a href="{!! route('categories',str_replace(' ','-',$postDepartment->dep_name_ar)) !!}">
                                            {!! $postDepartment->dep_name_ar !!}
                                        </a>
                                    @else
                                        <a href="{!! route('categories',str_replace(' ','-',$postDepartment->dep_name_en)) !!}">
                                            {!! $postDepartment->dep_name_en !!}
                                        </a>
                                    @endif
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-lg-2 col-md-4 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h2 class="h2_hide_before_after">&nbsp;</h2>
                        <ul class="footer-list">
                            <li><a href="{!! route('photos.gallery') !!}">{!! trans('frontend.photos_gallery') !!}</a>
                            </li>
                            <li><a href="{!! route('videos') !!}">{!! trans('frontend.videos_gallery') !!}</a></li>
                            <li><a href="{!! route('yearly.reports') !!}">{!! trans('frontend.yearly_report') !!}</a>
                            </li>
                            <li><a href="{!! route('monthly.reports') !!}">{!! trans('frontend.monthly_report') !!}</a>
                            </li>
                            <li><a href="https://www.noorelmarifa.org:2096">{!! trans('frontend.web_mail') !!}</a></li>
                            <li>
                                <a href="http://eservices.noorelmarifa.org/Portal/login.aspx">{!! trans('frontend.nma_portal') !!}</a>
                            </li>

                        </ul>
                    </div>
                </div>


                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget info-widget">
                        <h2>{!! trans('frontend.contact_us')!!}</h2>
                        <ul class="list-style-one">

                            <li><span class="icon fas fa-map-marker-alt"></span>
                                {!! Lang()=='ar' ? setting()->site_address_ar :setting()->site_address_en !!}
                            </li>

                            <li><span class="icon fas fa-phone"></span>
                                {!! trans('frontend.support') !!}:
                                <a href="tel:{!! setting()->site_mobile !!}">
                                    {!! setting()->site_mobile !!}
                                </a>
                            </li>

                            <li><span class="icon fas fa-envelope-open"></span>
                                {!! trans('frontend.email') !!}:
                                <a href="mailto:{!! setting()->site_email !!}"> {!! setting()->site_email !!}
                                </a>
                            </li>

                            <li><span class="icon fab fa-google"></span>
                                {!! trans('frontend.gmail') !!}:
                                <a href="mailto:{!! setting()->site_gmail !!}"> {!! setting()->site_gmail !!}
                                </a>
                            </li>

                        </ul>
                        <!--Emailed Form-->
                        <div class="emailed-form">

                                <div class="form-group">
                                    <input type="email" name="email" value="" autocomplete="off"
                                           placeholder="{!! trans('frontend.your_email') !!}"
                                           required>
                                    <button type="submit" class="theme-btn">{!! trans('frontend.add') !!}</button>
                                </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="clearfix">
                <div class="text-center">
                    <div class="copyright">
                        @if(Lang() =='ar')
                            <span>&copy;</span>
                            جميع الحقوق محفوظة
                            <a href="{!! route('index') !!}"> جمعية نور المعرفة</a>2020<span>.</span>
                        @else
                            Copyrights  &copy; 2020 <a href="{!! route('index') !!}">Nour El Marifa Association</a> .
                            All rights reserved.
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </div>
</footer>
