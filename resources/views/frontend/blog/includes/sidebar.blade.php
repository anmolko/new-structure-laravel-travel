<div class="sidebar mb-0">
    <div class="sidebar-widget">
        <h3 class="title stroke-shape">Search Post</h3>
        <div class="contact-form-action">
            {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'search_blog_form']) !!}
            <div class="input-box">
                <div class="form-group mb-0">
                    <input class="form-control pl-3" type="text" name="for" placeholder="Type your keywords...">
                    <button class="search-btn" type="submit"><i class="la la-search"></i></button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div><!-- end sidebar-widget -->
    @if(count( $data['categories']) > 0)
        <div class="sidebar-widget">
            <h3 class="title stroke-shape">Categories</h3>
            <div class="sidebar-list">
                <ul class="list-items">
                    @foreach($data['categories'] as $category)
                        <li><i class="la la-dot-circle mr-2 text-color"></i><a href="{{ route($base_route.'category',$category->slug) }}">{{$category->title}} ({{$category->blogs_count}})</a></li>
                    @endforeach
                </ul>
            </div>
        </div><!-- end sidebar-widget -->
    @endif
    @if(count( $data['latest']) > 0)

        <div class="sidebar-widget">
            <h3 class="title stroke-shape">Latest Posts</h3>
            <div class="tab-content" id="myTabContent">
                @foreach($data['latest'] as $latest)
                    <div class="card-item card-item-list recent-post-card">
                        <div class="card-img">
                            <a href="{{ route($module.'blog.show',$latest->slug) }}" class="d-block">
                                <img class="lazy" data-src="{{ asset(imagePath($latest->image)) }}" alt="blog-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="{{ route($module.'blog.show',$latest->slug) }}">
                                    {{ $latest->title }}
                                </a>
                            </h3>
                            <p class="card-meta">
                                <span class="post__date">{{date('d M Y', strtotime($latest->created_at))}} </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
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
</div><!-- end sidebar -->
