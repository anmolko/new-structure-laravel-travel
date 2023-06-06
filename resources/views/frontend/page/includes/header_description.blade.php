<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">

                <div class="card-body px-0 pb-0">

                    <h2 class="card-title font-size-28 text-center mb-4">
                        {{$element->first()->title ?? '' }}
                    </h2>

                    <div class="section-block"></div>
                    <div class="card-text py-3 ck-editor-description">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    <div class="section-block"></div>
                </div>
            </div>
        </div><!-- end col-lg-8 -->
    </div>
</div>
