<?php

namespace App\Http\Controllers\Backend\Activity\Basic_setup;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\Tour\PackageCategoryRequest;
use App\Http\Requests\Backend\Tour\PackageRibbonRequest;
use App\Models\Backend\Activity\PackageCategory;
use App\Traits\Crud;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PackageCategoryController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.activity.basic_setup.category.';
    protected string $view_path     = 'backend.activity.basic_setup.category.';
    protected string $panel         = 'Package category';
    protected string $folder_name   = 'category';
    protected string $page_title, $page_method, $image_path;
    protected object $model;


    public function __construct()
    {
        $this->model            = new PackageCategory();
        $this->image_path   = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PackageCategoryRequest $request
     * @return JsonResponse
     */
    public function store(PackageCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['key' => $this->model->changeTokey($request['title'])]);
            $request->request->add(['created_by' => auth()->user()->id ]);

            $this->model->create($request->all());
            Session::flash('success',$this->panel.' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }
}
