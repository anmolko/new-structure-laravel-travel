<?php

namespace App\Http\Controllers\Backend\Tour;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\UserRequest;
use App\Models\Backend\User;
use App\Services\PackageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PackageController extends BackendBaseController
{

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
        $this->model            = new User();
        $this->packageService   = $packageService;
        $this->image_path       = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name);
    }

    public function index()
    {
        $this->page_method = 'index';
        $this->page_title  = 'List '.$this->panel;
        $data               = [];
        $data['users']      = $this->model->orderBy('id','desc')->get();

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }

    public function getDataForDataTable(Request $request)
    {
        return $this->packageService->getDataForDatatable($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        $this->page_method = 'create';
        $this->page_title  = 'Create '.$this->panel;
        $data              = [];

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['password',bcrypt($request['password'])]);
            if($request->hasFile('image')){
                $image_name = $this->uploadImage($request->file('image'),'200','200');
                $request->request->add(['image',$image_name]);
            }
            if($request->hasFile('cover')){
                $image_name = $this->uploadImage($request->file('cover'),'2000','850');
                $request->request->add(['cover',$image_name]);
            }
            User::create($request->all());
            Session::flash('success',$this->panel.' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        $data              = [];
        $data['row']       = $this->model->find($id);

        return view($this->loadView($this->view_path.'edit'), compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UserRequest $request, $id)
    {
        $data['row']       = $this->model->find($id);

        DB::beginTransaction();
        try {
            if($request->has('password_input')) {
                $request->request->add(['password', bcrypt($request['password_input'])]);
            }
            if($request->hasFile('image')){
                $image_name = $this->updateImage($request->file('image'),$data['row']->image,'200','200');
                $request->request->add(['image',$image_name]);
            }
            if($request->hasFile('cover')){
                $image_name = $this->updateImage($request->file('cover'),$data['row']->cover,'2000','850');
                $request->request->add(['cover',$image_name]);
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $data['row']       = $this->model->find($id);
        DB::beginTransaction();
        try {
            $data['row']->delete();

            Session::flash('success',$this->panel.' was removed successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' was not removed. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }

    public function trash()
    {
        $this->page_method = 'trash';
        $this->page_title  = 'Trash '.$this->panel;
        $data              = [];
        $data['users']     = $this->model->onlyTrashed()->get();

        return view($this->loadView($this->view_path.'trash'), compact('data'));
    }

    public function restore(Request $request, $id)
    {

        DB::beginTransaction();
        try {
            $this->model->withTrashed()->find($id)->restore();

            Session::flash('success',$this->panel.' restored successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' restored failed. Something went wrong.');
        }

        return redirect()->route($this->base_route.'index');
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
