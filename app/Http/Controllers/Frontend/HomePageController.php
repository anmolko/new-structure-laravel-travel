<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\Homepage\Slider;
use App\Models\Backend\News\Blog;
use App\Models\Backend\Page\PageSectionGallery;
use App\Models\Backend\Service;
use App\Models\Backend\Testimonial;
use App\Models\Backend\Activity\Package;
use Illuminate\Contracts\Support\Renderable;

class HomePageController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.';
    protected string $view_path     = 'frontend.';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data                   = [];
        $data['slider_images']  = Slider::active()->descending()->pluck('image');
        $data['all_packages']   = Package::with('packageRibbon')->active()->descending()->get();
        $data['testimonials']   = Testimonial::active()->descending()->get();
        $data['countries']      = Country::active()->has('packages')->withCount('packages')->descending()->get();
        $data['services']       = Service::active()->descending()->get();
        $data['blogs']          = Blog::active()->descending()->latest()->take(3)->get();

        return view($this->loadView($this->view_path.'homepage'), compact('data'));
    }




    public function errorPage()
    {
        $data               = [];
        return view($this->view_path.'errors.404', compact('data'));
    }

}
