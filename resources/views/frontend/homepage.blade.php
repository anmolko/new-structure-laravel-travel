@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')

    <section class="hero-wrapper hero-wrapper7">
        <div class="hero-box">
            <div id="fullscreen-slide-contain">
                <ul class="slides-container">
                    @foreach($data['slider_images']  as $slider)
                        <li><img class="lazy" data-src="{{ asset(imagePath($slider)) }}" alt=""/></li>
                    @endforeach
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto responsive--column-l">
                        <div class="hero-content pb-5">
                            <div class="section-heading">
                                <h2 class="sec__title cd-headline zoom">
                                    Amazing
                                    <span class="cd-words-wrapper">
                                  <b class="is-visible">Tours</b>
                                    <b>Destinations</b>
                                      <b>Adventures</b>
                                      <b>Flights</b>
                                      <b>Cruises</b>
                                      <b>Package Deals</b>
                                      <b>Fun</b>
                                </span>
                                    Waiting for You
                                </h2>
                            </div>
                        </div>
                        <!-- end hero-content -->
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link d-flex align-items-center active"
                                        id="flight-tab"
                                        data-toggle="tab"
                                        href="#flight"
                                        role="tab"
                                        aria-controls="flight"
                                        aria-selected="true"
                                    >
                                        <i class="la la-plane mr-1"></i>Flights
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link d-flex align-items-center"
                                        id="tour-tab"
                                        data-toggle="tab"
                                        href="#tour"
                                        role="tab"
                                        aria-controls="tour"
                                        aria-selected="false"
                                    >
                                        <i class="la la-globe mr-1"></i>Tours
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                        @include($module.'includes.flight_tab')
                        <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                            @include($module.'includes.tour_tab')
                        </div>
                        <!-- end tab-pane -->
                        </div>
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </section>
    <!-- end hero-wrapper -->

    <section class="info-area padding-top-80px padding-bottom-45px">
        <div class="arrow-separator"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb radius-round-full">
                            <img class="w-50 lazy" data-src="{{asset('assets/frontend/images/browser.png')}}"  alt=""/>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Selection</h4>
                            <p class="info__desc">
                                Praesent commodo cursus magna, vel scelerisque nisl
                                consectetur et.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 radius-round-full">
                            <img class="w-50 lazy" data-src="{{asset('assets/frontend/images/layout.png')}}"  alt=""/>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Price Guarantee</h4>
                            <p class="info__desc">
                                Praesent commodo cursus magna, vel scelerisque nisl
                                consectetur et.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 radius-round-full">
                            <img class="w-50 lazy" data-src="{{asset('assets/frontend/images/support.png')}}"  alt=""/>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">24/7 Support</h4>
                            <p class="info__desc">
                                Praesent commodo cursus magna, vel scelerisque nisl
                                consectetur et.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    @if(count($data['all_packages'])>0)
        <section class="trending-area position-relative section-bg padding-top-100px padding-bottom-200px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="sec__title curve-shape padding-bottom-30px" data-text="curvs">
                              Our Top Tour
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row padding-top-50px">
                    @foreach($data['all_packages'] as $package)
                        <div class="col-lg-4 responsive-column ">
                            <div class="card-item">

                                <div class="card-img">
                                    <a href="{{ route('frontend.activity.show',$package->slug) }}" class="d-block">
                                        <img class="lazy" data-src="{{ asset(imagePath($package->image)) }}"  alt=""/>
                                    </a>
                                    @if($package->package_ribbon_id)
                                        <div class="ribbon {{ getRibbonClass($package->packageRibbon->key) }} ribbon-shape">{{$package->packageRibbon->title ?? ''}}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="#">{{ $package->title ?? '' }}</a></h3>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Category </span>
                                            <span class="price__num">{{ $package->packageCategory->title ?? '' }}</span>
                                        </p>
                                         <span class="tour-hour"><i class="la la-globe mr-1"></i>{{ $package->country->title }}</span>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end container -->
            <svg class="hero-svg"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 100 10"
                preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </section>
    @endif

    <section class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discount-box join-us-box">
                        <div class="discount-img">
                            <img class="lazy" data-src="{{ asset('assets/frontend/images/cta-bg-2.jpg') }}" alt="discount img"/>
                        </div>
                        <!-- end discount-img -->
                        <div class="discount-content d-flex align-items-center justify-content-between">
                            <div class="section-heading">
                                <h2 class="sec__title text-white mb-2">
                                    Explore more with us
                                </h2>
                                <p class="sec__desc text-white text-uppercase">
                                    Start Your Amazing Journey Right here Us
                                </p>
                            </div>
                            <!-- end section-heading -->
                            <div class="btn-box">
                                <a href="{{ route('frontend.contact-us') }}" class="theme-btn border-0">
                                    Our Activity <i class="la la-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end discount-content -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    @if(count($data['services'])>0)
        <section class="destination-area padding-top-130px padding-bottom-80px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h2 class="sec__title curve-shape padding-bottom-30px" data-text="curvs">
                               Our Services
                            </h2>
                        </div>
                        <!-- end section-heading -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="row padding-top-50px">

                    @foreach($data['services'] as $service)
                        <div class="col-lg-4 responsive-column">
                            <div class="card-item destination-card destination--card">
                                <div class="card-img">
                                    <img class="lazy" data-src="{{ asset(imagePath($service->image))}}" />
                                </div>
                                <div
                                    class="card-body d-flex align-items-center justify-content-between"
                                >
                                    <div>
                                        <h3 class="card-title">
                                            <a href="#">{{ $service->title }}</a>
                                        </h3>
                                        <p class="card-meta">{{ $service->description ? elipsis($service->description,20):'' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
        </section>
    @endif

    @if(count($data['countries'])>0)
        <section class="top-activity-area section--padding section-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-heading">
                            <h2 class="sec__title curve-shape padding-bottom-30px" data-text="curvs">
                                Popular Locations
                            </h2>
                            <p class="sec__desc pt-3">
                                Discover different activities and tours based on our locations
                            </p>
                        </div>

                        <!-- end section-heading -->
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="btn-box btn--box text-right">
                            <a href="#" class="theme-btn">Discover More <i class="la la-arrow-right ml-1"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row padding-top-50px">
                    @foreach($data['countries'] as $country)
                        <div class="col-lg-4 responsive-column">
                            <div class="flip-box">
                                <div class="flip-box-front">
                                    <img src="{{ asset(imagePath($country->image))}}" alt="" class="flip-img"/>
                                    <a href="#" class="flip-content d-flex align-items-end justify-content-start">
                                        <h3 class="flip-title">{{ $country->title }}</h3>
                                    </a><!-- end flip-content -->
                                </div>
                                <!-- end flip-box-front -->
                                <div class="flip-box-back">
                                    <img src="{{ asset(imagePath($country->image))}}" alt="" class="flip-img"/>
                                    <a href="#" class="flip-content d-flex align-items-center justify-content-center">
                                        <div>
                                            <div class="icon-element mx-auto mb-3 bg-white text-color-2">
                                                <i class="la la-arrow-right"></i>
                                            </div>
                                            <h3 class="flip-title">{{ $country->packages_count }} Activities</h3>
                                        </div>
                                    </a><!-- end flip-content -->
                                </div>
                                <!-- end flip-box-back -->
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- end row -->
            </div>
        </section>
    @endif

    @if(count($data['testimonials'])>0)
        <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-0">
                        <h2
                            class="sec__title curve-shape padding-bottom-30px"
                            data-text="curvs"
                        >
                            Customers Testimonial
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row  -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="testimonial-carousel carousel-action">
                        @foreach($data['testimonials'] as $testimonial)
                            <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                 {{ $testimonial->description }}
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset(imagePath($testimonial->image))}}" alt="testimonial image"/>
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">{{ $testimonial->title ?? '' }}</h4>
                                    <span class="author__meta">{{ $testimonial->position ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- end testimonial-carousel -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endif

    <div class="section-block"></div>

    <section class="cta-area cta-bg bg-fixed section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-50 line-height-60">
                            Enjoy Your Holiday <br/>
                            with Your loved ones
                        </h2>
                        <p class="sec__desc text-white pt-3">
                            Enjoy best offers on different tours all over the world
                        </p>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="{{ route('frontend.contact-us') }}" class="theme-btn border-0">
                            Reach Out <i class="la la-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->

    @if(count($data['blogs'])>0)
        <section class="blog-area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="sec__title curve-shape padding-bottom-30px" data-text="curvs">
                                Recent Articles
                            </h2>
                        </div>
                        <!-- end section-heading -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="row padding-top-50px">
                    @foreach($data['blogs'] as $blog)
                        <div class="col-lg-4 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img class="lazy" data-src="{{ asset(imagePath($blog->image))}}" alt=""/>
                                <div class="post-format icon-element">
                                    <i class="la la-photo"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">{{ $blog->category->title ?? '' }}</a>
                                    </div>
                                    <h3 class="card-title line-height-26">
                                        <a href="#">{{ $blog->title ?? '' }}</a>
                                    </h3>
                                    <p class="card-meta">
                                        <span class="post__date">{{date('d M Y', strtotime($blog->created_at))}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Read all</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="la la-share icon-element"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                    </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    @endif
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
