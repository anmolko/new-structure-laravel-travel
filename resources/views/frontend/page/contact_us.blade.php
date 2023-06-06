@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'bread-bg6.jpg'])
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">We'd love to hear from you</h3>
                            <p class="font-size-15">Send us a message and we'll respond as soon as possible</p>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                 {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'row submit_form']) !!}
                                <div class="col-lg-6 responsive-column">

                                    <div class="input-box">
                                        <label class="label-text required">Your Name <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="name" placeholder="Your name">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="Email address">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text required">Your Phone <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <span class="la la-phone form-icon"></span>
                                            <input class="form-control" type="text" name="phone" placeholder="Phone number">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Subject </label>
                                        <div class="form-group">
                                            <span class="la la-star-o form-icon"></span>
                                            <input class="form-control" type="text" name="subject" placeholder="Enter subject">
                                            <input class="form-control" type="hidden" name="type" value="contact form inquiry">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">Message <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn">Send Message</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                {!! Form::close() !!}
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Contact Us</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="address-book">
                                <ul class="list-items contact-address">
                                    <li>
                                        <i class="la la-map-marker icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Address</h5>
                                        <p class="map__desc">
                                            {{$data['setting_data']->address ?? ''}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="la la-phone icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Phone</h5>
                                        <p class="map__desc">Telephone:
                                            <a href="tel:{{$data['setting_data']->phone ?? ''}}">
                                                {{$data['setting_data']->phone ?? ''}}
                                            </a>
                                        </p>
                                        <p class="map__desc">Mobile:
                                            {{ $data['setting_data']->mobile ?? $data['setting_data']->whatsapp ?? $data['setting_data']->viber ?? ''}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="la la-envelope-o icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Email</h5>
                                        <p class="map__desc"> {{ $data['setting_data']->email ?? ''}}</p>
                                    </li>
                                </ul>
                                <ul class="social-profile text-center">
                                    @if(@$data['setting_data']->facebook)
                                        <li><a href="{{@$data['setting_data']->facebook}}"><span class="fa-brands fa-facebook"></span></a></li>
                                    @endif
                                    @if(@$data['setting_data']->youtube)
                                        <li><a href="{{@$data['setting_data']->youtube}}"><span class="fa-brands fa-youtube"></span></a></li>

                                    @endif
                                    @if(@$data['setting_data']->instagram)
                                        <li><a href="{{@$data['setting_data']->instagram}}"><span class="fa-brands fa-instagram"></span></a></li>
                                    @endif
                                    @if(@$data['setting_data']->linkedin)
                                        <li><a href="{{@$data['setting_data']->linkedin}}"><span class="fa-brands fa-linkedin"></span></a></li>
                                    @endif
                                    @if(!empty(@$data['setting_data']->ticktock))
                                        <li><a href="{{@$data['setting_data']->ticktock}}"><span class="fa-brands fa-tiktok"></span></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->


    <section class="map-area padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-container">
                        @if($data['setting_data'] && $data['setting_data']->google_map)
                            <iframe src="{{ $data['setting_data']->google_map }}" style="border:0;width: 100%;height: 465px;" allowfullscreen="" loading="lazy"></iframe>
                        @endif
                    </div><!-- end map-container -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end map-area -->

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
