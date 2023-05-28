<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Homepage\Slider;
use Illuminate\Contracts\Support\Renderable;

class HomePageController extends Controller
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
        $data               = [];
        $data['slider_images'] = Slider::active()->descending()->pluck('image');

        dd($data['slider_images']);



        return view($this->view_path.'homepage', compact('data'));
    }




    public function errorPage()
    {
        $data               = [];
        return view($this->view_path.'errors.404', compact('data'));
    }

}
