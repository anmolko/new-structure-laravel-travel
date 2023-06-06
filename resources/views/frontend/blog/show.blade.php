@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpg'])

    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">
                        <div class="card-img before-none">
                            <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="blog-img">
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="post-categories">
                                <a href="#" class="badge">{{ $data['row']->blogCategory->title ?? ''}}</a>
                            </div>
                            <h3 class="card-title font-size-28">{{ $data['row']->title ?? '' }}</h3>
                            <p class="card-meta pb-3">
                                <span class="post__date">  {{date('d M Y', strtotime($data['row']->created_at))}} </span>
                            </p>
                            <div class="section-block"></div>
                            <div class="card-text py-3 ck-editor-description">
                                {!!  $data['row']->description !!}
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="section-block"></div>
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
