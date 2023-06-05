<section class="footer-area section-bg padding-top-40px padding-bottom-30px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        @foreach($footerTopNav as $pageNav)
                            <li><a href="{{$pageNav}}"> {{ ucfirst(str_replace('-',' ',$pageNav)) }} </a></li>
                        @endforeach
                        <li><a href="{{ route('frontend.contact-us') }}">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
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
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <div class="section-block mt-4 mb-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="/" class="foot__logo">
                            <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" alt="" style="width:40%" />
                        </a>
                    </div>
                    <!-- end logo -->
                    <p class="footer__desc">
                        {{ $setting_data->description ?? '' }}
                    </p>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                        {{ $footer_nav_title1 ?? ''}}
                    </h4>
                    @if($footer_nav_data1!==null)
                        <ul class="list-items list--items">
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
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                        {{ $footer_nav_title2 ?? ''}}
                    </h4>
                    @if($footer_nav_data2!==null)
                        <ul class="list-items list--items">
                            @foreach(@$footer_nav_data2 as $nav)
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
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                        Contact Information
                    </h4>
                    <ul class="list-items pt-3">
                        <li>
                           {{ $setting_data->address ?? '' }}
                        </li>
                        <li>
                            <a href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                                {{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{@$setting_data->email ?? ''}}">
                                {{@$setting_data->email ?? ''}}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
        <div class="section-block"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right padding-top-30px text-center">
                    <p class="copy__desc">
                        &copy; {{date("Y")}} {{$setting_data->title ?? 'Advanced Travels'}} by
                        <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a> All Rights Reserved.
                    </p>
                </div>
                <!-- end copy-right -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end footer-area -->

<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>


<!-- Template JS Files -->
<script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/animated-headline.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/quantity-input.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/superslider-script.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
