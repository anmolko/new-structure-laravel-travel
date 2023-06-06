<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\News\BlogCategory;
use App\Models\Backend\Page\Page;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class PageController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.page.';
    protected string $view_path     = 'frontend.page.';
    protected string $panel         = 'Page';
    protected string $folder_name   = 'page';
    protected string $page_title, $page_method, $image_path;
    protected object $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model                = new Page();
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index($slug)
    {
        $data                  = [];
        $data['row']           = $this->model->active()->where('slug', $slug)->first();
        if(!$data['row']){
            abort(404);
        }
        $this->page_method          = 'index';
        $this->page_title           = $data['row']->title;
        $data['page_section']       = $data['row']->pageSections->pluck('slug','id')->toArray();
        $data['section_elements']   = [];

        foreach ($data['row']->pageSections as $section){
            if($section->slug == 'gallery'){
                $data['section_elements'][$section->slug] = $section->pageSectionGalleries;
            }else{
                $data['section_elements'][$section->slug] = $section->pageSectionElements;
            }
        }

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }



    public function show($slug)
    {

        $this->page_method      = 'show';
        $this->page_title       = $this->panel.' Details';
        $data                   = $this->getCommonData();
        $data['row']            = $this->model->where('slug',$slug)->first();

        if(!$data['row']){
            abort(404);
        }

        return view($this->loadView($this->view_path.'show'), compact('data'));
    }

    public function category($slug)
    {
        try {
            $this->page_method      = 'category';
            $data                   = $this->getCommonData();
            $data['category']       = BlogCategory::where('slug',$slug)->active()->first();
            $this->page_title       = $data['category']->title.' | '.$this->panel;
            $data['rows']           = $this->model->where('blog_category_id', $data['category']->id)->active()->descending()->paginate(6);
        } catch (\Exception $e) {
            abort(404);
        }

        return view($this->loadView($this->view_path.'category'), compact('data'));
    }

}
