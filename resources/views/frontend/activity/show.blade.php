@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($view_path.'includes.show_breadcrumb')

    <section class="tour-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                {{--                                <li><a data-scroll="photo" href="#photo" class="scroll-link">Gallery</a></li>--}}

                                <li><a data-scroll="description" href="#description" class="scroll-link active">Description</a></li>
                                <li><a data-scroll="itinerary" href="#itinerary" class="scroll-link">Itinerary</a></li>

                                {{--                                @if($data['row']->map)--}}
                                {{--                                    <li><a data-scroll="location-map" href="#location-map" class="scroll-link">Map</a></li>--}}
                                {{--                                @endif--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            @include($view_path.'partials.description')
                            @include($view_path.'partials.itinerary')
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @include($view_path.'includes.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/frontend/js/navbar-sticky.js')}}"></script>
@endsection
