<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">
<head>

    <meta charset="utf-8" />
    <title>404 Error | {{$setting_data->title ?? 'Advanced Travels'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <!-- Layout config Js -->
    <script src="{{asset('assets/backend/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/backend/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="auth-page-wrapper pt-5">
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
                            <h1 class="display-1 fw-medium">404</h1>
                            <h3 class="text-uppercase">Sorry, Page not Found </h3>
                            <p class="text-muted mb-4">The page you are looking for is not available!</p>
                            <a href="javascript:history.back()" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="copy__desc">
                            &copy; {{date("Y")}} {{$setting_data->title ?? 'Advanced Travels'}} by
                            <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a> All Rights Reserved.
                        </p>                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/backend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/backend/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('assets/backend/js/plugins.js')}}"></script>
<!-- JAVASCRIPT -->

<!-- particles js -->
<script src="{{asset('assets/backend/libs/particles.js/particles.js')}}"></script>
<!-- particles app js -->
<script src="{{asset('assets/backend/js/pages/particles.app.js')}}"></script>

</body>
</html>
