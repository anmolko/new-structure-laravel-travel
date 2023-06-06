@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')
    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'team-cta-bg.jpg', 'page_image'=> $data['row']->image])

    @if($data['section_elements'])
        @foreach($data['section_elements'] as $index=>$element)
            @if($index == 'basic_section' && count($element)>0)
                @include($base_route.'includes.basic_section')
            @endif
            @if($index == 'call_to_action' && count($element)>0)
                @include($base_route.'includes.call_to_action')
            @endif
            @if($index == 'flash_card' && count($element)>0)
                @include($base_route.'includes.flash_card')
            @endif
            @if($index == 'faq' && count($element)>0)
                @include($base_route.'includes.faq')
            @endif
            @if($index == 'header_description' && count($element)>0)
                @include($base_route.'includes.header_description')
            @endif
            @if($index == 'map_description' && count($element)>0)
                @include($base_route.'includes.map_description')
            @endif
            @if($index == 'gallery' && count($element)>0)
                @include($base_route.'includes.gallery')
            @endif
        @endforeach
    @endif
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
