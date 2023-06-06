{{--{{dd($element)}}--}}

<section class="gallery-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h4 class="font-size-16 pb-2">{{ $element->list_number_2 ?? '' }}</h4>
                    <h2 class="sec__title">{{ $element->list_number_1 ?? '' }}</h2>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            @foreach($element->pageSectionGalleries as $gallery)
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" data-caption="Showing image 1">
                            <img class="custom_gallery_size lazy" data-src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
