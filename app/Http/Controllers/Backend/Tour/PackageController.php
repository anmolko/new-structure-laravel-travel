<?php

namespace App\Http\Controllers\Backend\Tour;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\Tour\PackageRequest;
use App\Models\Backend\Tour\Country;
use App\Models\Backend\Tour\Package;
use App\Models\Backend\Tour\PackageCategory;
use App\Models\Backend\Tour\PackageRibbon;
use App\Services\PackageService;
use App\Traits\Crud;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PackageController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.tour.package.';
    protected string $view_path     = 'backend.tour.package.';
    protected string $panel         = 'Package';
    protected string $folder_name   = 'package';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;
    private PackageService $packageService;


    public function __construct(PackageService $packageService)
    {
        $this->model            = new Package();
        $this->packageService   = $packageService;
        $this->image_path   = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR);
    }

    public function index()
    {
        $this->page_method = 'index';
        $this->page_title  = 'List '.$this->panel;
        $data              = $this->getData();

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }

    public function getData(){
        $data['countries']  =  Country::active()->descending()->pluck('title','id');
        $data['categories'] =  PackageCategory::active()->descending()->pluck('title','id');
        $data['types']      =  PackageRibbon::active()->descending()->pluck('title','id');

        return $data;
    }

    public function getDataForDataTable(Request $request)
    {
        return $this->packageService->getDataForDatatable($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PackageRequest $request
     * @return JsonResponse
     */
    public function store(PackageRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['key' => $this->model->changeTokey($request['title'])]);
            $request->request->add(['created_by' => auth()->user()->id ]);
            if($request->hasFile('image_input')){
                $image_name = $this->uploadImage($request->file('image_input'),'200','200');
                $request->request->add(['image'=>$image_name]);
            }
            if($request->hasFile('cover_image')){
                $image_name = $this->uploadImage($request->file('cover_image'),'2000','850');
                $request->request->add(['cover'=>$image_name]);
            }
            $this->model->create($request->all());
            Session::flash('success',$this->panel.' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit($id)
    {
        $this->page_method = 'edit';
        $this->page_title  = 'Edit '.$this->panel;
        $data              = $this->getData();
        $data['row']       = $this->model->find($id);

        return view($this->loadView($this->view_path.'edit'), compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PackageRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(PackageRequest $request, $id)
    {
        $data['row']       = $this->model->find($id);

        DB::beginTransaction();
        try {
            $request->request->add(['updated_by' => auth()->user()->id ]);

            if($request->hasFile('image_input')){
                $image_name = $this->updateImage($request->file('image_input'),$data['row']->image,'200','200');
                $request->request->add(['image'=>$image_name]);
            }
            if($request->hasFile('cover_image')){
                $image_name = $this->updateImage($request->file('cover_image'),$data['row']->cover,'2000','850');
                $request->request->add(['cover'=>$image_name]);
            }

            $data['row']->update($request->all());
            Session::flash('success',$this->panel.' was updated successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' was not updated. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }

    public function removeTrash(Request $request, $id)
    {
        $data['row']       = $this->model->withTrashed()->find($id);

        DB::beginTransaction();
        try {
            $this->deleteImage($data['row']->image);
            $this->deleteImage($data['row']->cover);
            $data['row']->forceDelete();

            Session::flash('success',$this->panel.' was removed successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' was not removed. Something went wrong.');
        }

        return redirect()->route($this->base_route.'trash');
    }

    public function statusUpdate(){

        $data['row']       = $this->model->find(request()->id);
        DB::beginTransaction();
        try {
            $data['row']->update(request()->all());
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' was not updated. Something went wrong.');
        }
        return response()->json(['id'=>$data['row']->id,'status'=>$data['row']->status]);
    }
}
