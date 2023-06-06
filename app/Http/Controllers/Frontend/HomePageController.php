<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Frontend\CustomerInquiryRequest;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\CustomerInquiry;
use App\Models\Backend\Homepage\Slider;
use App\Models\Backend\News\Blog;
use App\Models\Backend\Page\PageSectionGallery;
use App\Models\Backend\Service;
use App\Models\Backend\Setting;
use App\Models\Backend\Testimonial;
use App\Models\Backend\Activity\Package;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomePageController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.';
    protected string $view_path     = 'frontend.';
    protected string $panel         = '';
    protected string $page_title, $page_method, $image_path;

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
        $data                       = [];
        $data['slider_images']      = Slider::active()->descending()->pluck('image');
        $data['all_packages']       = Package::with('packageRibbon')->active()->descending()->get();
        $data['testimonials']       = Testimonial::active()->descending()->get();
        $data['countries']          = Country::active()->has('packages')->withCount('packages')->descending()->get();
        $data['services']           = Service::active()->descending()->get();
        $data['blogs']              = Blog::active()->descending()->latest()->take(3)->get();
        $data['search_countries']   = $this->getCountries();
        $data['search_categories']  =$this->getPackageCategory();


        return view($this->loadView($this->view_path.'homepage'), compact('data'));
    }


    public function contact()
    {
        $this->page_method      = 'index';
        $this->page_title       = 'Contact us';
        $this->panel            = 'Contact';
        $data                   = [];
        $data['setting_data']   = Setting::first();
        return view($this->loadView($this->view_path.'page.contact_us'), compact('data'));
    }

    public function contactStore(CustomerInquiryRequest $request)
    {
        DB::beginTransaction();
        try {
            CustomerInquiry::create($request->all());
            Session::flash('success','Your message was submitted successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error','Your message could not relayed at the moment. Something went wrong.');
        }

        return response()->json(route('frontend.contact-us'));
    }

}
