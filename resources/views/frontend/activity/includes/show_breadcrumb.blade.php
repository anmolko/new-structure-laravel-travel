<section class="breadcrumb-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-list breadcrumb-top-list">
                    <ul class="list-items bg-transparent radius-none p-0">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route($base_route.'index')}}">{{ $panel }}</a></li>
                        <li>{{ $data['row']->title ?? $page_title ?? '' }}</li>

                    </ul>
                </div><!-- end breadcrumb-list -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="breadcrumb-area bread-bg-2 py-0"
         style="background-image: url( {{ $data['row']->cover ? asset(imagePath($data['row']->cover)) : asset('assets/frontend/images/bread-bg2.jpg')}} );">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-btn">
                        <div class="btn-box">
                            @if( $data['row']->video)
                                <a class="theme-btn" data-fancybox="video" data-src="{{ $data['row']->video }}"
                                   data-speed="700">
                                    <i class="la la-video-camera mr-2"></i>Video
                                </a>
                            @endif
                            @if(count($data['row']->packageGalleries)>0)
                                <a class="theme-btn lazy" data-src="{{ asset(imagePath($data['row']->image)) }}"
                                   data-fancybox="gallery"
                                   data-caption="Showing featured image"
                                   data-speed="700">
                                    <i class="la la-photo mr-2"></i>Photos
                                </a>
                            @endif
                        </div>
                        @foreach($data['row']->packageGalleries as $index=>$gallery)
                            <a class="d-none lazy"
                               data-fancybox="gallery"
                               data-src="{{ asset(galleryImagePath('package').$gallery->resized_name) }}"
                               data-caption="Showing gallery image - {{$index+1}}"
                               data-speed="700"></a>
                        @endforeach

                    </div><!-- end breadcrumb-btn -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
