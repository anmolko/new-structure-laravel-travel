<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Homepage\SliderRequest;
use App\Http\Requests\Backend\ServiceRequest;
use App\Http\Requests\Backend\TestimonialRequest;
use App\Models\Backend\Service;
use App\Models\Backend\Testimonial;
use App\Traits\Crud;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ServiceController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.service.';
    protected string $view_path     = 'backend.service.';
    protected string $panel         = 'Service';
    protected string $folder_name   = 'service';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;


    public function __construct()
    {
        $this->model            = new Service();
        $this->image_path       = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return JsonResponse
     */
    public function store(ServiceRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['created_by' => auth()->user()->id ]);
            $request->request->add(['key' => $this->model->changeTokey($request['title'])]);

            if($request->hasFile('image_input')){
                $image_name = $this->uploadImage($request->file('image_input'),'600','400');
                $request->request->add(['image'=>$image_name]);
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
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(ServiceRequest $request, $id)
    {
        $data['row']       = $this->model->find($id);

        DB::beginTransaction();
        try {
            if($request->hasFile('image_input')){
                $image_name = $this->updateImage($request->file('image_input'),$data['row']->image,'600','400');
                $request->request->add(['image'=>$image_name]);
            }

            $request->request->add(['updated_by' => auth()->user()->id ]);
            $data['row']->update($request->all());

            Session::flash('success',$this->panel.' was updated successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.' was not updated. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }
}
