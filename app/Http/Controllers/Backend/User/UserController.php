<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\UserRequest;
use App\Models\Backend\User;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends BackendBaseController
{

    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.user.user-management.';
    protected string $view_path     = 'backend.user.user_management.';
    protected string $panel         = 'User';
    protected string $folder_name   = 'user';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;
    private UserService $userService;


    public function __construct(UserService $userService)
    {
        $this->model        = new User();
        $this->userService  = $userService;
        $this->image_path   = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name);
    }

    public function index()
    {
        $this->page_method = 'index';
        $this->page_title  = 'List '.$this->panel;
        $data              = [];
        $data['row']       = $this->model->orderBy('id','desc')->get();

        return view($this->loadView($this->view_path.'index'), compact('data'));
    }

    public function getDataForDataTable(Request $request)
    {
        return $this->userService->getDataForDatatable($request);
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
            $request->request->add(['password' => bcrypt($request['password_input']) ]);

            $request->request->add(['password',]);
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
            if($request->hasFile('image_input')){
                $image_name = $this->uploadImage($request->file('image_input'),'200','200');
                $request->request->add(['image'=>$image_name]);
            }
            if($request->hasFile('cover_image')){
                $image_name = $this->uploadImage($request->file('cover_image'),'2000','850');
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $data['row']       = $this->model->find($id);
        try {
            DB::beginTransaction();
//            $status = $data['row']->forceDelete();
//            DB::rollBack();

            $data['row']->delete();
            DB::commit();
            Session::flash('success',$this->panel.' was removed successfully');
        } catch (\Exception $e) {
            Session::flash('error',$this->panel.' was not removed as data is already in use.');
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
