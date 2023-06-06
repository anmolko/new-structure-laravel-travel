<section class="cta-area bg-fixed section-padding text-center"
         style="background-image: url({{ asset('assets/frontend/images/bread-bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title mb-3 text-white custom_cta_title">{{ $element->first()->title ?? '' }}</h2>
                    <p class="sec__desc text-white custom_cta_subtitle">{{ $element->first()->subtitle ?? '' }}
                    </p>
                </div><!-- end section-heading -->
                @if($element->first()->button_link)

                    <div class="btn-box padding-top-35px">
                        <a href="{{$element->first()->button_link}}" class="theme-btn border-0">{{ $element->first()->button ?? 'Reach Out' }}</a>
                    </div>
                @endif
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
