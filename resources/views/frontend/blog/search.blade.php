@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'bread-bg8.jpg'])

    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">{{ count($data['rows']) }} Blogs found</h3>
                                <p class="font-size-14 line-height-20 pt-1">Read our latest articles and find out what's happening !</p>
                            </div>
                        </div><!-- end filter-top -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        @foreach( $data['rows']  as $row)
                            <div class="col-lg-6 responsive-column">
                                <div class="card-item blog-card">
                                    <div class="card-img">
                                        <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt="">
                                        <div class="post-format icon-element">
                                            <i class="la la-photo"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-categories">
                                                <a href="{{ route($base_route.'category',$row->blogCategory->slug)}}" class="badge">{{$row->blogCategory->title ?? ''}}</a>
                                            </div>
                                            <h3 class="card-title line-height-26">
                                                <a href="{{ route($base_route.'show',$row->slug)}}">
                                                    {{ $row->title ?? '' }}
                                                </a>
                                            </h3>
                                            <p class="card-meta">
                                                <span class="post__date"> {{date('d M Y', strtotime($row->created_at))}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-box mt-3 text-center">
                                {{ $data['rows']->links('vendor.pagination.simple-bootstrap-4') }}
                            </div><!-- end btn-box -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
