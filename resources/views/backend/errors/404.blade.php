@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/frontend/images/background/6.jpg')}})">
        <div class="auto-container">
            <h1>404 Error</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>404 Error</li>
            </ul>
        </div>
    </section>

    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Title Column-->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <h2>404 ERROR</h2>
                            <div class="title-text">Oops ! Looks like you took a wrong turn.</div>
                        </div>
                        <div class="text">
                            It seems like we couldn't find what you are looking for. Please try looking for something else or go to another URL.
                        </div>
                        <a href="#" class="theme-btn btn-style-five">Homepage</a>
                    </div>
                </div>

                <!--Video Column-->
                <div class="video-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="{{ asset('assets/frontend/images/resource/video-img.jpg') }}" alt="">
                            </figure>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
