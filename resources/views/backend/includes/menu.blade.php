    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/" target="_blank">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                        <span class="badge badge-pill bg-success" data-key="t-new">{{auth()->user()->user_type}}</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarTourMultilevel" data-bs-toggle="collapse" role="button" aria-controls="sidebarTourMultilevel">
                        <i class="ri-haze-line"></i> <span data-key="t-multi-level-tour">Tours</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarTourMultilevel" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarBasicSetupPackage" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-controls="sidebarBasicSetupPackage"
                                   data-key="t-level-basic-package"> Basic Setup
                                </a>
                                <div class="menu-dropdown collapse" id="sidebarBasicSetupPackage" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('backend.tour.basic_setup.country.index') }}"
                                               class="nav-link {{request()->route()->getName() == 'backend.tour.basic_setup.country.index' ? 'active':''}}"
                                               data-key="t-level-basic-package">
                                                Country </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('backend.tour.basic_setup.category.index') }}"
                                               class="nav-link {{request()->route()->getName() == 'backend.tour.basic_setup.category.index' ? 'active':''}}"
                                               data-key="t-level-basic-package"> Package Category </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('backend.tour.basic_setup.type.index') }}"
                                               class="nav-link {{request()->route()->getName() == 'backend.tour.basic_setup.type.index' ? 'active':''}}"
                                               data-key="t-level-basic-package"> Package Type </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.tour.package.index') }}"
                                   class="nav-link {{request()->route()->getName() == 'backend.tour.basic_setup.type.index' ? 'active':''}}"
                                   data-key="t-multi-level-tour"> Package </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{request()->route()->getName() == 'backend.user.user_management.index' ? 'active':''}}" href="{{route('backend.user.user-management.index')}}">
                        <i class="ri-account-circle-line"></i> <span data-key="t-widgets">User Mgmt.</span>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"--}}
{{--                       aria-expanded="false" aria-controls="sidebarMultilevel">--}}
{{--                        <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse menu-dropdown" id="sidebarMultilevel">--}}
{{--                        <ul class="nav nav-sm flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button"--}}
{{--                                   aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level--}}
{{--                                    1.2--}}
{{--                                </a>--}}
{{--                                <div class="collapse menu-dropdown" id="sidebarAccount">--}}
{{--                                    <ul class="nav nav-sm flex-column">--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"--}}
{{--                                               role="button" aria-expanded="false" aria-controls="sidebarCrm"--}}
{{--                                               data-key="t-level-2.2"> Level 2.2--}}
{{--                                            </a>--}}
{{--                                            <div class="collapse menu-dropdown" id="sidebarCrm">--}}
{{--                                                <ul class="nav nav-sm flex-column">--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}




                {{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'homepage.index') active @endif" href="{{route('homepage.index')}}">--}}
{{--                    <i class="ri-home-gear-line"></i> <span data-key="t-forms">Home</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'menu.index') active @endif" href="{{route('menu.index')}}">--}}
{{--                    <i class="ri-stack-line"></i> <span data-key="t-forms">Menu</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'services.index') active @endif" href="{{route('services.index')}}">--}}
{{--                        <i class="ri-customer-service-2-line"></i> <span data-key="t-widgets">Services</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'jobcategory.index' || \Request::route()->getName() == 'job.index' ||  \Request::route()->getName() == 'job.create' || \Request::route()->getName() == 'job.edit') active @endif" href="#sidebarJobs" data-bs-toggle="collapse" role="button"--}}
{{--                    aria-expanded="false" aria-controls="sidebarJobs">--}}
{{--                        <i class="ri-links-line"></i> <span data-key="t-job-mgmt">Job Mgmt.</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse menu-dropdown @if(\Request::route()->getName() == 'jobcategory.index' || \Request::route()->getName() == 'job.index' ) show @endif" id="sidebarJobs">--}}
{{--                        <ul class="nav nav-sm flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('jobcategory.index')}}" class="nav-link @if(\Request::route()->getName() == 'jobcategory.index') active @endif" data-key="t-job-category">Category</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('job.index')}}" class="nav-link @if(\Request::route()->getName() == 'job.index') active @endif" data-key="t-job">Job</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'blogcategory.index' || \Request::route()->getName() == 'blog.index' ||  \Request::route()->getName() == 'blog.create' || \Request::route()->getName() == 'blog.edit' ) active @endif" href="#sidebarBlogs" data-bs-toggle="collapse" role="button"--}}
{{--                       aria-expanded="false" aria-controls="sidebarBlogs">--}}
{{--                        <i class="ri-bold"></i> <span data-key="t-blog-mgmt">Blog Mgmt.</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse menu-dropdown @if(\Request::route()->getName() == 'blogcategory.index' || \Request::route()->getName() == 'blog.index' ) show @endif" id="sidebarBlogs">--}}
{{--                        <ul class="nav nav-sm flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('blogcategory.index')}}" class="nav-link @if(\Request::route()->getName() == 'blogcategory.index') active @endif" data-key="t-blog-category">Category</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('blog.index')}}" class="nav-link @if(\Request::route()->getName() == 'blog.index') active @endif" data-key="t-blog">Blog</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'pages.index') active @endif" href="{{route('pages.index')}}">--}}
{{--                        <i class="ri-pages-line"></i> <span data-key="t-widgets">Pages</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'formbuilder::forms.index' || \Request::route()->getName() == 'formbuilder::forms.create' || \Request::route()->getName() == 'formbuilder::forms.edit') active @endif" href="{{route('formbuilder::forms.index')}}">--}}
{{--                        <i class="ri-pages-line"></i> <span data-key="t-widgets">Forms</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'backend.user.user_management.index') active @endif" href="{{route('backend.user.user_management.index')}}">--}}
{{--                        <i class="ri-account-circle-line"></i> <span data-key="t-widgets">User Mgmt.</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'managing-director.index') active @endif" href="{{route('managing-director.index')}}">--}}
{{--                        <i class="ri-open-arm-line"></i> <span data-key="t-widgets">Managing Director</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'testimonials.index') active @endif" href="{{route('testimonials.index')}}">--}}
{{--                        <i class="ri-hand-heart-line"></i> <span data-key="t-widgets">Testimonial</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'teams.index') active @endif" href="{{route('teams.index')}}">--}}
{{--                        <i class="ri-team-line"></i> <span data-key="t-widgets">Teams</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'service-category.index') active @endif" href="{{route('service-category.index')}}">--}}
{{--                        <i class=" ri-price-tag-2-line"></i> <span data-key="t-widgets">Service Categories</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'album.index' || \Request::route()->getName() == 'album.show') active @endif" href="{{route('album.index')}}">--}}
{{--                        <i class="ri-gallery-line"></i> <span data-key="t-widgets">Albums</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'clients.index') active @endif" href="{{route('clients.index')}}">--}}
{{--                        <i class="ri-user-2-line"></i> <span data-key="t-widgets">Clients</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'subsidiary.index') active @endif" href="{{route('subsidiary.index')}}">--}}
{{--                        <i class="ri-user-4-line"></i> <span data-key="t-widgets">Subsidiary</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'sliders.index') active @endif" href="{{route('sliders.index')}}">--}}
{{--                        <i class="ri-slideshow-line"></i> <span data-key="t-widgets">Sliders</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
