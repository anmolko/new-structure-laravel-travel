@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')
    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpg'])

    @if($data['section_elements'])
        @foreach($data['section_elements'] as $index=>$element)
            @if($index == 'basic_section')
                @include($base_route.'includes.basic_section')
            @endif
            @if($index == 'call_to_action')
                @include($base_route.'includes.call_to_action')
            @endif
            @if($index == 'flash_card')
                @include($base_route.'includes.flash_card')
            @endif
            @if($index == 'faq')
                @include($base_route.'includes.faq')
            @endif
            @if($index == 'header_description')
                @include($base_route.'includes.header_description')
            @endif
            @if($index == 'map_description')
                @include($base_route.'includes.map_description')
            @endif
            @if($index == 'gallery')
                @include($base_route.'includes.gallery')
            @endif
        @endforeach
    @endif
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
