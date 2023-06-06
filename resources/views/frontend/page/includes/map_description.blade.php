<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pr-5">
                    <div class="section-heading">
                        <h4 class="font-size-16 pb-2">{{ $element->first()->subtitle ?? '' }}</h4>
                        <h2 class="sec__title">{{ $element->first()->title ?? '' }}</h2>
                        <p class="sec__desc pt-4 pb-2 text-justify">
                            {{ $element->first()->description ?? '' }}
                        </p>

                    </div>
                    @if($element->first()->button_link)
                        <div class="btn-box pt-4">
                            <a href="{{$element->first()->button_link}}" class="theme-btn">{{ $element->first()->button ?? 'Learn more' }} <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    @endif
                </div>
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="image-box about-img-box" style="height: 600px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d266.3349664705987!2d85.33336097730498!3d27.71767486634828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f3f402500b%3A0x672cd8537d17f880!2sMD%20Human%20Resource!5e0!3m2!1sen!2snp!4v1682317631311!5m2!1sen!2snp
                        " style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
