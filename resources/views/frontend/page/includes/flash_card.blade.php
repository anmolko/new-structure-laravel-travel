<section class="service-area section--padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h4 class="font-size-16 pb-2">{{ $element->first()->subtitle ?? '' }}</h4>
                    <h2 class="sec__title">{{ $element->first()->title ?? '' }}</h2>
                </div>
            </div>
        </div>
        <div class="row padding-top-80px">
            @foreach($element as $index=>$row)
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-4">

                        <div class="info-icon">
                            @if($index==0)
                                <i class="la la-plane"></i>
                            @elseif($index==1)
                                <i class="la la-anchor"></i>
                            @else
                                <i class="la la-support"></i>
                            @endif
                        </div>
                        <div class="info-content">
                            <h4 class="info__title">{{$row->list_title ?? ''}}</h4>
                            <p class="info__desc">{{$row->list_description ?? ''}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- end row -->

    </div><!-- end container -->
</section>
