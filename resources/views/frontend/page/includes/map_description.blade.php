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
                @if($setting_data && $setting_data->google_map)
                    <div class="image-box about-img-box" style="height: 600px;">
                        <iframe src="{{ $setting_data->google_map }}" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
