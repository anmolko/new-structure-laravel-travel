<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? 'Advanced Travels')}}"/>
    <meta name="keywords" content=" {{@$setting_data->meta_tags ?? 'Travel, Tours, Trips, Nepal Tour, Hiking, Trekking, Interational Tours, Advanced Travels'}}">
    <link rel="canonical" href="https://www.advancedtravel.com.np" />

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->website_name ?? 'Advanced Travels')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->website_name ?? 'Advanced Travels')}} </title>
    @endif
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <meta property="og:title" content="{{ucwords(@$setting_data->meta_title ?? 'Advanced Travels')}}" />
    <meta property="og:type" content="Tour and Travel" />
    <meta property="og:url" content="https://www.advancedtravel.com.np" />
    <meta property="og:site_name" content="Advanced Travels" />
    <meta property="og:description" content="{{ucwords(@$setting_data->meta_description ?? 'Advanced Travels')}}" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/custom_css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>

    @yield('css')
    @stack('styles')
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle
                class="path"
                cx="25"
                cy="25"
                r="20"
                fill="none"
                stroke-width="5"
            ></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
        START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li>
                                    <a href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                                        <i class="la la-phone mr-1"></i>
                                        {{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{@$setting_data->email ?? ''}}"><i class="la la-envelope mr-1"></i>
                                        {{@$setting_data->email ?? ''}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
                                <ul class="social-profile">
                                    @if(@$setting_data->facebook)
                                        <li>
                                            <a href="{{@$setting_data->facebook}}">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(@$setting_data->youtube)
                                        <li>
                                            <a href="{{@$setting_data->youtube}}">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(@$setting_data->instagram)
                                        <li>
                                            <a href="{{@$setting_data->instagram}}">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(@$setting_data->linkedin)
                                        <li><a href="{{@$setting_data->linkedin}}">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(!empty(@$setting_data->ticktock))
                                        <li>
                                            <a href="{{@$setting_data->ticktock}}">
                                                <i class="fa-brands fa-tiktok"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper justify-content-between">
                        <a href="#" class="down-button"
                        ><i class="la la-angle-down"></i
                            ></a>
                        <div class="logo">
                            <a href="/">
                                <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" style="width:135px; height:40px"/>
                            </a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                            <!-- end menu-toggler -->
                        </div>
                        <!-- end logo -->
                        <div class="main-menu-content pr-0 ml-0">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="/"> Home </a>
                                    </li>
                                    @if(!empty($top_nav_data))
                                        @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                                <li>
                                                    <a href="#">{{ @$nav->name ?? @$nav->title }} <i class="la la-angle-down"></i></a>
                                                    <ul class="dropdown-menu-item">
                                                        @foreach($nav->children[0] as $childNav)
                                                            <li class="{{!empty($childNav->children[0]) ? 'dropdown-list':''}}">
                                                                <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                    {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul class="sub-menu">
                                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                                            <li>
                                                                                <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                                    {{ @$lastchild->name ?? @$lastchild->title ?? ''}}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                        {{ @$nav->name ?? @$nav->title ??''}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="{{route('frontend.contact-us')}}" class="theme-btn">Reach Out</a>
                        </div>
                        <!-- end nav-btn -->
                    </div>
                    <!-- end menu-wrapper -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end header-menu-wrapper -->
</header>
