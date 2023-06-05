@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($view_path.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpg"'])


@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
