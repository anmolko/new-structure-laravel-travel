<section class="breadcrumb-area" style="background-image: url( {{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) : asset('assets/frontend/images/'.$breadcrumb_image) }} );">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white"> {{ $page_title }}</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="/">Home</a></li>
                            @if($page_method !=='index')
                                <li><a href="{{route($base_route.'index')}}">{{ $panel }}</a></li>
                                <li>{{ $page_title }}</li>
                            @else
                                <li class="breadcrumb-item active">{{ $panel }}</a></li>
                            @endif
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
