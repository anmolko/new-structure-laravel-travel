<div class="sidebar mt-0">
    @if(count( $data['categories']) > 0)
        <div class="sidebar-widget">
            <h3 class="title stroke-shape">Our Categories</h3>
            <div class="sidebar-list">
                <ul class="list-items">
                    @foreach($data['categories'] as $category)
                        <li><i class="la la-dot-circle mr-2 text-color"></i>
                            <a href="{{ route('frontend.activity.category', $category->slug ) }}">{{ $category->title ?? '' }} ({{ $category->packages_count }})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if(count($data['ribbons'])>0)
        <div class="sidebar-widget">
            <div class="section-tab section-tab-2 pb-3">
                <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
                    @foreach($data['ribbons'] as $ribbon)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active':'' }}" id="{{$ribbon->key}}-tab"
                               data-toggle="tab" href="#{{$ribbon->key}}" role="tab" aria-controls="{{$ribbon->key}}" aria-selected="{{ $loop->first ? 'true':'false' }}">
                                {{$ribbon->title ?? ''}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                @foreach($data['ribbons'] as $ribbon)
                    <div class="tab-pane {{ $loop->first ? 'active':'' }}" id="{{$ribbon->key}}" role="tabpanel" aria-labelledby="{{$ribbon->key}}-tab">
                        @foreach($ribbon->packages as $package)
                            <div class="card-item card-item-list recent-post-card">
                                <div class="card-img">
                                    <a href="{{ route('frontend.activity.show',$package->slug) }}" class="d-block">
                                        <img class="lazy" data-src="{{ asset(imagePath($package->image)) }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('frontend.activity.show',$package->slug) }}">
                                           {{ $package->title ?? '' }}
                                        </a>
                                    </h3>
                                    <p class="card-meta">
                                        <span class="post__date">
                                            {{date('d M Y', strtotime($package->created_at))}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>

<div class="form-box mt-3">
    <div class="form-title-wrap">
        <h3 class="title">Contact Us</h3>
    </div><!-- form-title-wrap -->
    <div class="form-content">
        <div class="address-book">
            <ul class="list-items contact-address">
                <li>
                    <i class="la la-phone icon-element"></i>
                    <h5 class="title font-size-16 pb-1">Phone</h5>
                    <p class="map__desc">Telephone:
                        <a href="tel:{{$setting_data->phone ?? ''}}">
                            {{$setting_data->phone ?? ''}}
                        </a>
                    </p>
                    <p class="map__desc">Mobile:
                        {{ $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                    </p>
                </li>
                <li>
                    <i class="la la-envelope-o icon-element"></i>
                    <h5 class="title font-size-16 pb-1">Email</h5>
                    <p class="map__desc"> {{ $setting_data->email ?? ''}}</p>
                </li>
            </ul>
            <ul class="social-profile text-center">
                @if(@$setting_data->facebook)
                    <li><a href="{{@$setting_data->facebook}}"><span class="fa-brands fa-facebook"></span></a></li>
                @endif
                @if(@$setting_data->youtube)
                    <li><a href="{{@$setting_data->youtube}}"><span class="fa-brands fa-youtube"></span></a></li>

                @endif
                @if(@$setting_data->instagram)
                    <li><a href="{{@$setting_data->instagram}}"><span class="fa-brands fa-instagram"></span></a></li>
                @endif
                @if(@$setting_data->linkedin)
                    <li><a href="{{@$setting_data->linkedin}}"><span class="fa-brands fa-linkedin"></span></a></li>
                @endif
                @if(!empty(@$setting_data->ticktock))
                    <li><a href="{{@$setting_data->ticktock}}"><span class="fa-brands fa-tiktok"></span></a></li>
                @endif
            </ul>
        </div>
    </div><!-- end form-content -->
</div>


