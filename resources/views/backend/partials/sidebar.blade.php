<!-- Left Sidebar start -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('backend.dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="" height="25">
                    </span>
                    <span class="logo-lg">
                        <img src="{{@$setting_data->logo ? asset('/images/settings/'.@$setting_data->logo): asset('/assets/backend/images/canosoft-logo.png') }}" alt="Logo" height="65">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('backend.dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="" height="40">
                    </span>
                     <span class="logo-lg">
                        <img src="{{@$setting_data->logo_white ? asset('/images/settings/'.@$setting_data->logo_white): asset('/assets/backend/images/canosoft-logo.png') }}" alt="Logo" height="55">
                     </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    @include($module.'includes.menu')
</div>

<!-- Left Sidebar End -->
<div class="main-content">
