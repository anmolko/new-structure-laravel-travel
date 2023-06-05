<?php

namespace App\Http\Controllers\Frontend\News;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\Activity\PackageCategory;
use App\Models\Backend\Activity\PackageRibbon;
use App\Models\Backend\Activity\Package;
use App\Models\Backend\News\Blog;
use App\Models\Backend\News\BlogCategory;
use App\Services\Frontend\PackageSearchService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class BlogController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.blog.';
    protected string $view_path     = 'frontend.blog.';
    protected string $panel         = 'Blog';
    protected string $folder_name   = 'blog';
    protected string $page_title, $page_method, $image_path;
    protected object $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model                = new Blog();
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
        $data                   = $this->getCommonData();
        $data['rows']           = $this->model->active()->descending()->get();

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }


    public function getCommonData(): array
    {
        $data['categories']     = BlogCategory::active()->descending()->has('blogs')->withCount('blogs')->get();

        return $data;
    }


    public function search(Request $request)
    {
        $this->page_method      = 'search';
        $this->page_title       = 'Search '.$this->panel;
        $data                   = $this->getCommonData();
        $data['query']          = $request['title'];
        $data['rows']           = $this->model->where('title', 'LIKE', '%' . $data['query']  . '%')->active()->paginate(6);


        return view($this->loadView($this->view_path.'search'), compact('data'));
    }

    public function show($slug)
    {
        $this->page_method      = 'show';
        $this->page_title       = $this->panel.' Details';
        $data                   = $this->getCommonData();
        $data['row']            = $this->model->where('slug',$slug)->first();

        return view($this->loadView($this->view_path.'show'), compact('data'));
    }

    public function category($slug)
    {
        $this->page_method      = 'category';
        $data                   = $this->getCommonData();
        $data['category']       = BlogCategory::where('slug',$slug)->active()->first();
        $this->page_title       = $data['category']->title.' '.$this->panel;
        $data['rows']           = $this->model->where('blog_category_id', $data['category']->id)->active()->descending()->paginate(6);

        return view($this->loadView($this->view_path.'category'), compact('data'));
    }

}
