<!--Call To Action Section-->
<div class="call-to-action-section">
    <div class="outer-container">
        <div class="clearfix">

            <!--Left Column-->
            <div class="left-column clearfix">
                <div class="image-layer"
                     style="background-image: url({{asset('assets/frontend/images/background/1.jpg')}})"></div>
                <div class="inner-column">
                    <h2>We help you to unlock & unleash the power <br> within your large scale Business</h2>
                </div>
            </div>

            <!--Right Column-->
            <div class="right-column">
                <div class="inner-column">
                    <a href="{{route('contact')}}" class="theme-btn btn-style-four">Book a Consultation</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End Call To Action Section-->

<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="/"><img
                                            src="{{ (@$setting_data->logo_white) ? asset('/images/settings/'.@$setting_data->logo_white): asset('/images/settings/'.@$setting_data->logo) }}"
                                            alt=""/></a>
                                </div>
                                <div class="text">
                                    {!! ucfirst(@$setting_data->website_description ?? '') !!}
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                @if($footer_nav_data1!==null)
                                    <ul class="footer-link">
                                        @foreach(@$footer_nav_data1 as $nav)
                                            @if(empty(@$nav->children[0]))
                                                <li><a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                        {{ @$nav->name ?? @$nav->title ?? ''}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget posts-widget">
                                <h2>Recent Jobs</h2>


                                @foreach(@$footer_jobs as $index=>$job)
                                    <article class="post">
                                        <div class="text">
                                            <a href="{{route('job.single',@$job->slug)}}">
                                                {{ ucfirst(@$job->name)}}
                                            </a>
                                        </div>
                                        <ul class="post-date">
                                            <li>
                                                <a href="{{route('job.single',@$job->slug)}}">View Details</a>
                                            </li>
                                            <li>
                                                @if(@$job->end_date >= $today)
                                                    {{date('M j, Y',strtotime(@$job->end_date))}}
                                                @else
                                                    Expired
                                                @endif</li>
                                        </ul>
                                    </article>
                                @endforeach

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h2>Our Social Block</h2>
                                <div class="text">Get in touch with us. Reach out or follow us.</div>
                                <ul class="list-style-one">
                                    <li><span>Phone:</span> {{@$setting_data->phone}}</li>
                                    <li><span>Email:</span> {{@$setting_data->email}}</li>
                                </ul>
                                <!--Social Icon One-->
                                <ul class="social-icon-one mt-3">
                                    @if(@$setting_data->facebook)
                                        <li><a href="{{@$setting_data->facebook}}"><span class="fa-brands fa-facebook"></span></a></li>
                                    @endif
                                    @if(@$setting_data->youtube)
                                        <li><a href="{{@$setting_data->youtube}}"><span class="fa-brands fa-youtube"></span></a></li>

                                    @endif
                                    @if(@$setting_data->instagram)
                                        <li><a href="{{@$setting_data->instagram}}"><span class="fa-brands fa-instagram"></span></a></li>

                                    @endif
                                    @if(@$setting_data->linkedin)
                                        <li><a href="{{@$setting_data->linkedin}}"><span class="fa-brands fa-linkedin"></span></a></li>
                                    @endif
                                    @if(!empty(@$setting_data->ticktock))
                                        <li><a href="{{@$setting_data->ticktock}}"><span class="fa-brands fa-tiktok"></span></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="copyright">Copyrights &copy; {{date("Y")}} {{$setting_data->website_name ?? 'MD Human Resource'}} by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a> All Rights Reserved.</div>
                </div>
{{--                <div class="column col-md-6 col-sm-12 col-xs-12">--}}
{{--                    <ul class="footer-nav">--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                        <li><a href="#">Legal Terms</a></li>--}}
{{--                        <li><a href="#">FAQ’s</a></li>--}}
{{--                        <li><a href="#">Support</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer-->

</div>
<!--End pagewrapper--><!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{asset('assets/frontend/js/jquery.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/frontend/js/appear.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/sticky.js')}}"></script>
<script src="{{asset('assets/frontend/js/slick.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/script.js')}}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
