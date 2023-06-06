<section class="faq-area section-bg section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">{{ $element->first()->title ?? '' }}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-40px">
            <div class="col-lg-12">
                <div class="accordion accordion-item" id="accordionExample">
                    @foreach($element as $index=>$row)
                        <div class="card">
                            <div class="card-header" id="faqHeading{{$index}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link d-flex align-items-center justify-content-between" type="button"
                                            data-toggle="collapse" data-target="#faqCollapse{{$index}}"
                                            aria-expanded=" {{$loop->first ? 'true':'false'}}" aria-controls="faqCollapse{{$index}}">
                                        <span>{{ $row->list_title ?? '' }}</span>
                                        <i class="la la-minus"></i>
                                        <i class="la la-plus"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="faqCollapse{{$index}}" class="collapse {{$loop->first ? 'show':''}}" aria-labelledby="faqHeading{{$index}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>{{ $row->list_description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="accordion-help-text pt-2">
                    <p class="font-size-14 font-weight-regular">Any more questions? Reach out and  <a href="{{$module.'contact-us'}}" class="color-text">leave a message</a></p>
                </div>
            </div><!-- end col-lg-7 -->
            <!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
