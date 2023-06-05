@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($view_path.'includes.breadcrumb',['breadcrumb_image'=>'bread-bg8.jpg'])

    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">{{ count($data['all_packages']) }} Tours found</h3>
                                <p class="font-size-14 line-height-20 pt-1">Your search query results are shown below !</p>
                            </div>
                        </div><!-- end filter-top -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($data['all_packages'] as $package)
                            <div class="col-lg-4 responsive-column ">
                                <div class="card-item">

                                    <div class="card-img">
                                        <a href="{{ route('frontend.activity.show',$package->slug) }}" class="d-block">
                                            <img class="lazy" data-src="{{ asset(imagePath($package->image)) }}"  alt=""/>
                                        </a>
                                        <span class="badge badge-ribbon">
                                            <a href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}" class="text-white">{{ $package->packageCategory->title ?? '' }}</a>
                                        </span>
                                        @if($package->package_ribbon_id)
                                            <div class="ribbon {{ getRibbonClass($package->packageRibbon->key) }} ribbon-shape">{{$package->packageRibbon->title ?? ''}}</div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <h3 class="card-title"><a href="{{ route('frontend.activity.show',$package->slug) }}">{{ $package->title ?? '' }}</a></h3 class="card-title">
                                            <span class="tour-hour"><i class="la la-globe mr-1"></i>{{ $package->country->title }}</span>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
