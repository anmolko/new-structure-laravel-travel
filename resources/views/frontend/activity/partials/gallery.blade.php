<div id="photo" class="page-scroll">
    <div class="single-content-item padding-top-40px padding-bottom-40px">
        <h3 class="title font-size-22">Gallery</h3>
        <div class="gallery-carousel carousel-action padding-top-30px">
            @foreach($data['row']->packageGalleries as $gallery)
                <div class="card-item mb-0">
                    <div class="card-img">
                        <img class="lazy" data-src="{{ asset(galleryImagePath('package').$gallery->resized_name) }}" alt="Destination-img">
                    </div>
                </div>
            @endforeach
        </div><!-- end gallery-carousel -->
    </div><!-- end single-content-item -->
    <div class="section-block"></div>
</div><!-- end photo -->
