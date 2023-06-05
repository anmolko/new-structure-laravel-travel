<div class="sidebar mb-0">
    <div class="sidebar-widget">
        <h3 class="title stroke-shape">Search Blog</h3>
        <div class="contact-form-action">
            {!! Form::open(['route' => $module.'activity.search', 'method'=>'GET', 'class'=>'row align-items-center search_blog_form']) !!}
                <div class="input-box">
                    <div class="form-group mb-0">
                        <input class="form-control pl-3" type="text" name="title" placeholder="Type your keywords...">
                        <button class="search-btn" type="submit"><i class="la la-search"></i></button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div><!-- end sidebar-widget -->
    @if(count( $data['categories']) > 0)
        <div class="sidebar-widget">
            <h3 class="title stroke-shape">Categories</h3>
            <div class="sidebar-category">
                @foreach($data['categories'] as $category)
                    <div class="custom-checkbox">
                        <label for="cat1">All <span class="font-size-13 ml-1">(55)</span></label>
                    </div>
                @endforeach
                </div><!-- end collapse -->
                <a class="btn-text" data-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                </a>
            </div>
        </div><!-- end sidebar-widget -->
    @endif
    @if(count( $data['latest']) > 0)
        <div class="sidebar-widget">
            <div class="section-tab section-tab-2 pb-3">
                @foreach($data['latest'] as $latest)
                    <div class="card-item card-item-list recent-post-card">
                    <div class="card-img">
                        <a href="{{ route($module.'blog.show',$package->slug) }}" class="d-block">
                            <img class="lazy" data-src="{{ asset(imagePath($latest->image)) }}" alt="blog-img">
                        </a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="{{ route($module.'blog.show',$latest->slug) }}">
                               {{ $latest->title }}
                            </a>
                        </h3>
                        <p class="card-meta">
                            <span class="post__date">{{date('d M Y', strtotime($blog->created_at))}} </span>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="sidebar-widget">
        <h3 class="title stroke-shape">About us</h3>
        <div class="sidebar-about">
            <div class="sidebar-about-img">
                <img class="lazy" data-src="{{asset('assets/frontend/images/destination-img3.jpg')}}" alt="">
                <p class="font-size-28 font-weight-bold text-white">Trizen</p>
            </div>
            <p class="pt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem eaque ipsa quae ab illo inventore incididunt ut labore et dolore magna</p>
        </div>
    </div><!-- end sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="title stroke-shape">Follow & Connect</h3>
        <ul class="social-profile">
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
    </div><!-- end sidebar-widget -->
</div>
