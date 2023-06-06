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
        @endforeach
    @endif



@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
