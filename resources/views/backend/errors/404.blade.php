@extends('backend.layouts.master')
@section('title','404 - Not Found')
@section('css')
@endsection

@section('content')
    <div class="auth-page-wrapper pt-5 pb-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center pt-4">
                            <div class="">
                                <img src="{{asset('assets/backend/images/error.svg')}}" alt="" class="error-basic-img move-animation">
                            </div>
                            <div class="mt-n4">
                                <h1 class="display-1 display-0 fw-medium">404</h1>
                                <h3 class="text-uppercase">Sorry, Page not Found.</h3>
                                <p class="text-muted mb-4">The page you are looking for not available!</p>
                                <a href="{{route('backend.dashboard')}}" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back To Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
    </div>


@endsection

@section('js')
    <!-- particles js -->
    <script src="{{asset('assets/backend/libs/particles.js/particles.js')}}"></script>
    <!-- particles app js -->
    <script src="{{asset('assets/backend//js/pages/particles.app.js')}}"></script>
@endsection

