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
                        <li><img src="{{ asset(imagePath($slider)) }}" alt=""/></li>
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
                        @include($module.'includes.tour_tab')
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
    <!-- end info-area -->

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
                @foreach($data['all_packages'] as $packages)
                    <div class="col-lg-4 responsive-column ">
                        <div class="card-item">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img class="lazy" data-src="{{ asset(imagePath($packages->image)) }}">
                                </a>
                                <div class="ribbon ribbon-top-left {{$packages->packageRibbon->key ?? ''}}"><span>{{$packages->packageRibbon->title ?? ''}}</span></div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="#">{{ $packages->title ?? '' }}</a></h3>
{{--                                <p class="card-meta">--}}
{{--                                    {{ $packages->country->title ?? '' }}--}}
{{--                                </p>--}}
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">Category</span>
                                        <span class="price__num">{{ $packages->packageCategory->title ?? '' }}</span>
                                    </p>
                                     <span class="tour-hour"><i class="la la-globe mr-1"></i>{{ $packages->country->title }}</span>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div>
                @endforeach

            </div>
        </div>
        <!-- end container -->
        <svg
            class="hero-svg"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 100 10"
            preserveAspectRatio="none"
        >
            <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
    </section>

{{--    call action--}}
    <section class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discount-box join-us-box">
                        <div class="discount-img">
                            <img class="lazy" data-src="{{ asset('assets/frontend/images/cta-bg-2.jpg') }}" alt="discount img"/>
                        </div>
                        <!-- end discount-img -->
                        <div
                            class="discount-content d-flex align-items-center justify-content-between"
                        >
                            <div class="section-heading">
                                <h2 class="sec__title text-white mb-2">
                                    Explore more with us
                                </h2>
                                <p class="sec__desc text-white">
                                    Join 2000+ locals & 1200+ contributors from different cities
                                </p>
                            </div>
                            <!-- end section-heading -->
                            <div class="btn-box">
                                <a href="#" class="theme-btn border-0"
                                >Explore <i class="la la-arrow-right ml-1"></i
                                    ></a>
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

    <!-- Country wise list -->

    <section class="destination-area padding-top-130px padding-bottom-80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2 class="sec__title">Popular Destinations</h2>
                        <p class="sec__desc pt-3">
                            Discover different activities and tours based on our locations
                        </p>
                    </div>

                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="btn-box btn--box text-right">
                        <a href="#" class="theme-btn"
                        >Discover More <i class="la la-arrow-right ml-1"></i
                            ></a>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">

                @foreach($data['countries'] as $country)
                    <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card destination--card">
                        <div class="card-img">
                            <img class="lazy" data-src="{{ asset(imagePath($country->image))}}" />
                        </div>
                        <div
                            class="card-body d-flex align-items-center justify-content-between"
                        >
                            <div>
                                <h3 class="card-title">
                                    <a href="#">{{ $country->title }}</a>
                                </h3>
                                <p class="card-meta">{{ $country->packages_count }} Activities</p>
                            </div>
                            <div>
                                <a
                                    href="#"
                                    class="theme-btn theme-btn-small border-0"
                                >Explore <i class="la la-arrow-right ml-1"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="destination-area position-relative section-bg padding-top-100px padding-bottom-140px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Top Destinations</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-60px">
                @foreach($data['services'] as $service)
                    <div class="col-lg-4">
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img class="lazy" data-src="{{ asset(imagePath($service->image))}}" alt="destination-img" />
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="#">{{ $service->title }}</a>
                                    <div class="card-rating d-flex align-items-center">
                      <span class="ratings d-flex align-items-center mr-1">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                      </span>
                                        <span class="rating__text">(70694 Reviews)</span>
                                    </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text"> {{ $service->description ? elipsis($service->description,20):'' }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path
                d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"
            ></path>
        </svg>
    </section>
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

    <div class="section-block"></div>

    <section class="top-activity-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2
                            class="sec__title curve-shape padding-bottom-30px"
                            data-text="curvs"
                        >
                            Top Activity
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img1.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Cultural Trecks</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img1.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img2.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Carnival</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img2.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img3.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Murano</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img3.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img4.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Eat + Drink</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img4.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img5.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Gondola Ride</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img5.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img6.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Museum Tickets</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img6.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img7.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Sightseeing</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img7.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="images/img8.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-end justify-content-start"
                            >
                                <h3 class="flip-title">Outdoor Activities</h3></a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-front -->
                        <div class="flip-box-back">
                            <img src="images/img8.jpg" alt="" class="flip-img"/>
                            <a
                                href="#"
                                class="flip-content d-flex align-items-center justify-content-center"
                            >
                                <div>
                                    <div
                                        class="icon-element mx-auto mb-3 bg-white text-color-2"
                                    >
                                        <i class="la la-arrow-right"></i>
                                    </div>
                                    <h3 class="flip-title">Explore Activity</h3>
                                </div>
                            </a
                            ><!-- end flip-content -->
                        </div>
                        <!-- end flip-box-back -->
                    </div>
                    <!-- end flip-box -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end top-activity-area -->

    <section class="cta-area cta-bg bg-fixed section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-50 line-height-60">
                            Enjoy Your Holiday <br/>
                            with 50% Discount
                        </h2>
                        <p class="sec__desc text-white pt-3">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        </p>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="#" class="theme-btn border-0"
                        >Explore Now <i class="la la-arrow-right ml-1"></i
                            ></a>
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->

    <section class="blog-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2
                            class="sec__title curve-shape padding-bottom-30px"
                            data-text="curvs"
                        >
                            Recent Articles
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/img5.jpg" alt="blog-img"/>
                            <div class="post-format icon-element">
                                <i class="la la-photo"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Travel</a>
                                    <a href="#" class="badge">lifestyle</a>
                                </div>
                                <h3 class="card-title line-height-26">
                                    <a href="blog-single.html"
                                    >Best Scandinavian Accommodation – Treat Yourself</a
                                    >
                                </h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 January, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">5 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex align-items-center justify-content-between"
                        >
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team1.jpg" alt="testimonial image"/>
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Leroy Bell</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/img6.jpg" alt="blog-img"/>
                            <div class="post-format icon-element">
                                <i class="la la-play"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Video</a>
                                </div>
                                <h3 class="card-title line-height-26">
                                    <a href="blog-single.html"
                                    >Amazing Places to Stay in Norway</a
                                    >
                                </h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 February, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">4 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex align-items-center justify-content-between"
                        >
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team2.jpg" alt="testimonial image"/>
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Phillip Hunt</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="images/img7.jpg" alt="blog-img"/>
                            <div class="post-format icon-element">
                                <i class="la la-music"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">audio</a>
                                </div>
                                <h3 class="card-title line-height-26">
                                    <a href="blog-single.html"
                                    >Feel Like Home on Your Business Trip</a
                                    >
                                </h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 March, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">3 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="card-footer d-flex align-items-center justify-content-between"
                        >
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/small-team3.jpg" alt="testimonial image"/>
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Luke Jacobs</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li>
                                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="lab la-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end blog-area -->

    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <p class="sec__desc text-white-50 pb-1">Newsletter Sign up</p>
                        <h2 class="sec__title font-size-30 text-white">
                            Subscribe to Get Special Offers
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="subscriber-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text text-white"
                                    >Enter email address</label
                                    >
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input
                                            class="form-control"
                                            type="email"
                                            name="email"
                                            placeholder="Email address"
                                        />
                                        <button
                                            class="theme-btn theme-btn-small submit-btn"
                                            type="submit"
                                        >
                                            Subscribe
                                        </button>
                                        <span class="font-size-14 pt-1 text-white-50"
                                        ><i class="la la-lock mr-1"></i>Don't worry your
                        information is safe with us.</span
                                        >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->

    <section class="clientlogo-area padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title font-size-35">We were featured in</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-10px">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <img src="images/client-logo.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo2.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo3.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo4.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo5.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo6.png" alt="brand image"/>
                        </div>
                        <!-- end client-logo-item -->
                    </div>
                    <!-- end client-logo -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end client logo-area -->

@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
