<?php

namespace App\Http\Controllers\Frontend\Activity;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\Activity\PackageCategory;
use App\Models\Backend\Activity\PackageRibbon;
use App\Models\Backend\Homepage\Slider;
use App\Models\Backend\News\Blog;
use App\Models\Backend\Page\PageSectionGallery;
use App\Models\Backend\Service;
use App\Models\Backend\Testimonial;
use App\Models\Backend\Activity\Package;
use Illuminate\Contracts\Support\Renderable;

class PackageController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.activity.';
    protected string $view_path     = 'frontend.activity.';
    protected string $panel         = 'Activity';
    protected string $folder_name   = 'activity';
    protected string $page_title, $page_method;

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
        $this->page_method      = 'index';
        $this->page_title       = 'All '.$this->panel;
        $data                   = [];
        $data['all_packages']   = Package::active()->descending()->paginate(1);
        $data['categories']     = PackageCategory::active()->descending()->has('packages')->withCount('packages')->get();
        $data['ribbons']        = PackageRibbon::active()->descending()->whereHas('packages', function ($package){
            return $package->descending()->take(3);
        })->withCount('packages')->limit(3)->get();

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }

    public function search()
    {
        $this->page_method      = 'search';
        $this->page_title       = 'Search '.$this->panel;
        $data                   = [];
        $data['all_packages']   = Package::active()->descending()->get();
        $data['categories']     = PackageCategory::active()->descending()->has('packages')->get();

        return view($this->loadView($this->view_path.'search'), compact('data'));
    }

    public function show($id)
    {
        $this->page_method      = 'show';
        $this->page_title       = $this->panel.' Details';
        $data                   = [];
        $data['all_packages']   = Package::active()->descending()->get();
        $data['categories']     = PackageCategory::active()->descending()->has('packages')->get();

        return view($this->loadView($this->view_path.'show'), compact('data'));
    }

    public function category()
    {
        $this->page_method      = 'category';
        $this->page_title       = 'Category '.$this->panel;
        $data                   = [];
        $data['all_packages']   = Package::active()->descending()->get();
        $data['categories']     = PackageCategory::active()->descending()->has('packages')->get();

        return view($this->loadView($this->view_path.'show'), compact('data'));
    }

}
