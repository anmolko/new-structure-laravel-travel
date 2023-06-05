@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($view_path.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpg"])

    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($data['rows'] as $row )
                            <div class="col-lg-6 responsive-column">
                                <div class="card-item blog-card">
                                    <div class="card-img">
                                        <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt="">
                                        <div class="post-format icon-element">
                                            <i class="la la-photo"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-categories">
                                                <a href="{{$row->category->key}}" class="badge">{{$row->category->title ?? ''}}</a>
                                            </div>
                                            <h3 class="card-title line-height-26"><a href="#">{{ $row->title }}</a></h3>
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
{{--                                {{ $data['rows']->links('vendor.pagination.simple-bootstrap-4') }}--}}
                            </div><!-- end btn-box -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">

                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
