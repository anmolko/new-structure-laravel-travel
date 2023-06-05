<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\Activity\PackageCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class BackendBaseController extends Controller
{
    protected function loadView($view_path){
        View::composer($view_path, function ($view){
            $view->with('base_route', $this->base_route);
            $view->with('view_path', $this->view_path);
            if(isset($this->panel)) {
                $view->with('panel', $this->panel);
            }
            $view->with('folder_name', property_exists($this,'folder_name') ? $this->folder_name:'');
            if(isset($this->module)){
                $view->with('module', $this->module);
            }
            if(isset($this->page_method)){
                $view->with('page_method', $this->page_method);
            }

            if(isset($this->page_title)){
                $view->with('page_title', $this->page_title);
            }

            if(isset($this->image_path)){
                $view->with('image_path', $this->image_path);
            }

            if(isset($this->file_path)){
                $view->with('file_path', $this->file_path);
            }

            if(isset($this->folder_name)){
                $view->with('folder_name', $this->folder_name);
            }
        });
        return $view_path;
    }

    protected function generalUploadImage($image,$width,$height){
        $name        = $this->folder_name.'/'.uniqid().$image->getClientOriginalName();
        if (!is_dir($this->image_path.$this->folder_name)) {
            File::makeDirectory($this->image_path.$this->folder_name, 0777, true);
        }
        $status = Image::make($image->getRealPath())->orientate();
        if($width && $height){
            $status = $status->fit($width,$height);
        }
        $status = $status->save($this->image_path.$name);

        return ['status'=>$status,'name'=>$name];
    }


    protected function uploadImage($image,$width=null,$height=null)
    {
        $result = $this->generalUploadImage($image,$width,$height);
        if ($result['status']) {
            return $result['name'];
        }
    }

    protected function updateImage($image,$image_name=null,$width=null,$height=null)
    {
        $result = $this->generalUploadImage($image,$width,$height);
        if ($result['status']) {
            if (!empty($image_name) && file_exists($this->image_path.$image_name)){
                @unlink($this->image_path.$image_name);
            }
            return $result['name'];
        }
    }

    protected function deleteImage($image)
    {
        if (!empty($image) && file_exists($this->image_path.$image)){
            @unlink($this->image_path.DIRECTORY_SEPARATOR.$image);
        }
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

    public function getCountries(){
        return Country::has('packages')->active()->descending()->pluck('title','id');
    }

    public function getPackageCategory(){
        return PackageCategory::has('packages')->active()->descending()->pluck('title','id');
    }
}
