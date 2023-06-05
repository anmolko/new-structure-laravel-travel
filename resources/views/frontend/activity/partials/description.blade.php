<div id="description" class="page-scroll">
    <div class="single-content-item pb-4">
        <h3 class="title font-size-26">{{ $data['row']->title }}</h3>
    </div>

    <div class="section-block"></div>

    <!-- single-content-item -->
    <div class="single-content-item py-4">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="single-tour-feature d-flex align-items-center mb-3">
                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                        <i class="la la-globe"></i>
                    </div>
                    <div class="single-feature-titles">
                        <h3 class="title font-size-15 font-weight-medium">Country</h3>
                        <span class="font-size-13">{{ $data['row']->country->title ?? '' }}</span>
                    </div>
                </div>
            </div>

            @if($data['row']->duration)
                <div class="col-lg-4 responsive-column">
                    <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                            <i class="la la-clock-o"></i>
                        </div>
                        <div class="single-feature-titles">
                            <h3 class="title font-size-15 font-weight-medium">Duration</h3>
                            <span class="font-size-13">{{ $data['row']->duration }}</span>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-4 responsive-column">
                <div class="single-tour-feature d-flex align-items-center mb-3">
                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                        <i class="la la-flag-checkered"></i>
                    </div>
                    <div class="single-feature-titles">
                        <h3 class="title font-size-15 font-weight-medium">Category</h3>
                        <span class="font-size-13">{{ $data['row']->packageCategory->title ?? '' }}</span>
                    </div>
                </div><!-- end single-tour-feature -->
            </div><!-- end col-lg-4 -->

            @if($data['row']->packageRibbon)
                <div class="col-lg-4 responsive-column">
                    <div class="single-tour-feature d-flex align-items-center mb-3">
                        <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                            <i class="la la-star-o"></i>
                        </div>
                        <div class="single-feature-titles">
                            <h3 class="title font-size-15 font-weight-medium">Type</h3>
                            <span class="font-size-13">{{ $data['row']->packageRibbon->title ?? '' }}</span>
                        </div>
                    </div><!-- end single-tour-feature -->
                </div><!-- end col-lg-4 -->
            @endif
        </div><!-- end row -->
    </div>
    <!-- end single-content-item -->

    <div class="section-block"></div>

    <div class="single-content-item padding-top-40px padding-bottom-40px ck-editor-description">
        <h3 class="title font-size-22">Description</h3>
        <div class="py-3">
            {!! $data['row']->description !!}
        </div>
    </div><!-- end single-content-item -->
    <div class="section-block"></div>
</div>
