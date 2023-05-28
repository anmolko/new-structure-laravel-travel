<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="MD Human resource">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://mdhumanresource.com" />

    @yield('seo')

    <!-- Stylesheets -->
    <link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
{{--    <div class="preloader"></div>--}}

    <!-- Main Header-->
    <header class="main-header">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="header-info-list">
                            <li><span class="icon fa fa-envelope"></span><a href="mailto:{{@$setting_data->phone ?? ''}}">{{@$setting_data->email ?? ''}}</a></li>
                            <li><span class="icon fa fa-map-marker"></span> <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->address ?? ''}}</a></li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right">
                        <!--Social Box-->
                        <ul class="social-box">
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
                                <li><a href="{{@$setting_data->instagram}}">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a></li>
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

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="/">
                                <img style="height: 60px" src="{{asset('/images/settings/'.@$setting_data->logo)}}" alt=""></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="/">Home</a></li>
                                    @if(!empty($top_nav_data))
                                        @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                                <li class="dropdown">
                                                    <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                                    <ul>
                                                        @foreach($nav->children[0] as $childNav)
                                                            <li class="{{!empty($childNav->children[0]) ? 'dropdown':''}}">
                                                                <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                    {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul>
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
                            </div>
                        </nav>


                        <div class="button-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Reach out</a>
                        </div>

                        <!--Search Box Outer-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="get" id="searchform" action="{{route('searchJob')}}">
                                                <div class="form-group">
                                                    <input  id="s" name="s" type="text" class="form-control" placeholder="Find Jobs here.." oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" class="img-responsive">
                        <img style="height: 60px" src="{{asset('/images/settings/'.@$setting_data->logo)}}" alt="">
                    </a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Home</a></li>
                                @if(!empty($top_nav_data))
                                    @foreach($top_nav_data as $nav)
                                        @if(!empty($nav->children[0]))
                                            <li class="current dropdown">
                                                <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                                <ul>
                                                    @foreach($nav->children[0] as $childNav)
                                                        <li class="{{!empty($childNav->children[0]) ? 'dropdown':''}}">
                                                            <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                            @if(!empty($childNav->children[0]))
                                                                <ul>
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
                                        @endif
                                    @endforeach
                                @else
                                    <li>
                                        <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                            {{ @$nav->name ?? @$nav->title ??''}}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->
