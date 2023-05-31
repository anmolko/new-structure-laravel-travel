<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\MenuRequest;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Backend\Activity\Package;
use App\Models\Backend\Menu;
use App\Models\Backend\MenuItem;
use App\Models\Backend\Service;
use App\Traits\Crud;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MenuController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.menu.';
    protected string $view_path     = 'backend.menu.';
    protected string $panel         = 'Menu';
    protected string $folder_name   = 'menu';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;


    public function __construct()
    {
        $this->model            = new Menu();
        $this->image_path       = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR);
    }

    public function getData(){
        $data                = [];
        $data['services']    = Service::active()->descending()->get();
        $data['menus']       = Menu::active()->descending()->get();
//        $data['pages']       = Page::active()->descending()->get();
//        $data['blogs']       = Blog::active()->descending()->get();
        $data['packages']    = Package::active()->descending()->get();

        if(isset($_GET['slug']) && $_GET['slug'] != 'new'){
            $id = $_GET['slug'];
            $data['desiredMenu'] = Menu::where('slug',$id)->first();
            $data['menuTitle']   =  $data['desiredMenu']->title;
            if($data['desiredMenu']->content != ''){
                $data['menuitems'] = json_decode($data['desiredMenu']->content);
                if(@$data['menuitems'][0] != null){
                    $data['menuitems'] = $data['menuitems'][0];
                    foreach($data['menuitems'] as $menu){
                        $menu->title    = MenuItem::where('id',$menu->id)->value('title');
                        $menu->name     = MenuItem::where('id',$menu->id)->value('name');
                        $menu->slug     = MenuItem::where('id',$menu->id)->value('slug');
                        $menu->target   = MenuItem::where('id',$menu->id)->value('target');
                        $menu->type     = MenuItem::where('id',$menu->id)->value('type');
                        if(!empty($menu->children[0])){
                            foreach ($menu->children[0] as $child) {
                                $child->title   = MenuItem::where('id',$child->id)->value('title');
                                $child->name    = MenuItem::where('id',$child->id)->value('name');
                                $child->slug    = MenuItem::where('id',$child->id)->value('slug');
                                $child->target  = MenuItem::where('id',$child->id)->value('target');
                                $child->type    = MenuItem::where('id',$child->id)->value('type');
                                if(!empty($child->children[0])){
                                    foreach ($child->children[0] as $minichild) {
                                        $minichild->title   = MenuItem::where('id',$minichild->id)->value('title');
                                        $minichild->name    = MenuItem::where('id',$minichild->id)->value('name');
                                        $minichild->slug    = MenuItem::where('id',$minichild->id)->value('slug');
                                        $minichild->target  = MenuItem::where('id',$minichild->id)->value('target');
                                        $minichild->type    = MenuItem::where('id',$minichild->id)->value('type');
                                    }
                                }
                            }
                        }
                    }
                }else{
                    $data['desiredMenu']->content = null;
                    $data['desiredMenu']->update();
                }
            }else{
                $data['menuitems'] = MenuItem::where('menu_id', $data['desiredMenu']->id)->get();
            }
        }
        else{
            $data['desiredMenu'] = Menu::orderby('id','DESC')->first();
            if( $data['desiredMenu'] !== null){
                $data['menuTitle']   =  $data['desiredMenu']->title;
            }else{
                $data['menuTitle']   = "";
            }
            if( $data['desiredMenu']){
                if( $data['desiredMenu']->content != ''){
                    $data['menuitems'] = json_decode( $data['desiredMenu']->content);
                    if(@$data['menuitems'][0] != null){
                        $data['menuitems'] = $data['menuitems'][0];
                        foreach($data['menuitems'] as $menu){
                            $menu->title    = MenuItem::where('id',$menu->id)->value('title');
                            $menu->name     = MenuItem::where('id',$menu->id)->value('name');
                            $menu->slug     = MenuItem::where('id',$menu->id)->value('slug');
                            $menu->target   = MenuItem::where('id',$menu->id)->value('target');
                            $menu->type     = MenuItem::where('id',$menu->id)->value('type');
                            if(!empty($menu->children[0])){
                                foreach ($menu->children[0] as $child) {
                                    $child->title   = MenuItem::where('id',$child->id)->value('title');
                                    $child->name    = MenuItem::where('id',$child->id)->value('name');
                                    $child->slug    = MenuItem::where('id',$child->id)->value('slug');
                                    $child->target  = MenuItem::where('id',$child->id)->value('target');
                                    $child->type    = MenuItem::where('id',$child->id)->value('type');
                                    if(!empty($child->children[0])){
                                        foreach ($child->children[0] as $minichild) {
                                            $minichild->title   = MenuItem::where('id',$minichild->id)->value('title');
                                            $minichild->name    = MenuItem::where('id',$minichild->id)->value('name');
                                            $minichild->slug    = MenuItem::where('id',$minichild->id)->value('slug');
                                            $minichild->target  = MenuItem::where('id',$minichild->id)->value('target');
                                            $minichild->type    = MenuItem::where('id',$minichild->id)->value('type');
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        $data['desiredMenu']->content = null;
                        $data['desiredMenu']->update();
                    }
                }else{
                    $data['menuitems'] = MenuItem::where('menu_id', $data['desiredMenu']->id)->get();
                }
            }
        }

//        return view($this->loadView($this->view_path.'index'), compact('data'));
        return $data;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param MenuRequest $request
     * @return RedirectResponse
     */
    public function store(MenuRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['created_by' => auth()->user()->id]);
            $request->request->add(['status' => true ]);

            $data = $this->model->create($request->all());
            DB::commit();
            Session::flash('success',$this->panel.' was created successfully');
            return redirect()->route($this->base_route.'index');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param int $id
     * @return array
     */
    public function update(ServiceRequest $request, $id)
    {
        $data['row']       = $this->model->find($id);

        return $data;
    }

    public function destroy(Request $request)
    {
        $delete    = $this->model->find($request->id);
        DB::beginTransaction();
        try {
            $delete->forceDelete();

            Session::flash('success',$this->panel.' was deleted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not deleted. Something went wrong.');
        }

        return redirect()->route('menu.index');
    }

    public function updateMenu(Request $request){

        $status = $this->syncData($request);

        if($status){
            Session::flash('success','Menu Updated Successfully');
        }else{
            Session::flash('error','Menu could not be updated');
        }
    }


//    public function addPage(Request $request){
//        $data       = $request->all();
//        $menuid     = $request->menuid;
//        $ids        = $request->ids;
//        $menu       = $this->model->findOrFail($menuid);
//        if($menu->content == ''){
//            foreach($ids as $id){
//                $page = Page::find($id);
//                $data =[
//                    'title'          => $page->name,
//                    'slug'          => $page->slug,
//                    'page_id'        => $id,
//                    'type'          => 'page',
//                    'menu_id'       => $menuid,
//                    'created_by'    => Auth::user()->id,
//                ];
//                $status = \App\Models\MenuItem::create($data);
//            }
//
//        }
//        else{
//            $olddata = json_decode($menu->content,true);
//            foreach($ids as $id){
//                $page = Page::find($id);
//                $data =[
//                    'title'          => $page->name,
//                    'slug'          => $page->slug,
//                    'page_id'       => $id,
//                    'type'          => 'page',
//                    'menu_id'       => $menuid,
//                    'created_by'    => Auth::user()->id,
//                ];
//                $status = MenuItem::create($data);
//            }
//            foreach($ids as $id){
//                $page = Page::find($id);
//                $array['title']         = $page->name;
//                $array['slug']          = $page->slug;
//                $array['page_id']       = $id;
//                $array['type']          = 'page';
//                $array['id']            = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->value('id');
//                $array['children']      = [[]];
//                array_push($olddata[0],$array);
//                $oldata = json_encode($olddata);
//                $status = $menu->update(['content'=>$olddata]);
//            }
//        }
//if($status){
//Session::flash('success','Service added in '.$this->panel);
//}else{
//    Session::flash('error','Service could not be added in '.$this->panel);
//}
//    }

    public function addService(Request $request){
        $menuid     = $request->menuid;
        $ids        = $request->ids;
        $menu       = $this->model->findOrFail($menuid);
        if($menu->content == ''){
            foreach($ids as $id){
                $service = Service::find($id);
                $data = [
                    'title'          => $service->title,
                    'slug'           => $service->key,
                    'service_id'     => $id,
                    'type'           => 'service',
                    'menu_id'        => $menuid,
                    'created_by'     => Auth::user()->id,
                ];
                $status = MenuItem::create($data);
            }

        }
        else{
            $olddata = json_decode($menu->content,true);
            foreach($ids as $id){
                $service = Service::find($id);
                $data =[
                    'title'         => $service->title,
                    'slug'          => $service->key,
                    'service_id'    => $id,
                    'type'          => 'service',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                $status = MenuItem::create($data);
            }
            foreach($ids as $id){
                $service = Service::find($id);
                $array['title']         = $service->title;
                $array['slug']          = $service->key;
                $array['service_id']    = $id;
                $array['type']          = 'service';
                $array['id']            = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->value('id');
                $array['children']      = [[]];
                array_push($olddata[0],$array);
                $status = $menu->update(['content'=>json_encode($olddata)]);
            }
        }
        if($status){
            Session::flash('success','Service added in '.$this->panel);
        }else{
            Session::flash('error','Service could not be added in '.$this->panel);
        }
    }

    public function addPackage(Request $request){
        $menuid     = $request->menuid;
        $ids        = $request->ids;
        $menu       = $this->model->findOrFail($menuid);
        if($menu->content == null){
            $olddata = [];
            foreach($ids as $id){
                $package = Package::find($id);
                $data = [
                    'title'          => $package->title,
                    'slug'           => $package->key,
                    'package_id'     => $id,
                    'type'           => 'package',
                    'menu_id'        => $menuid,
                    'created_by'     => Auth::user()->id,
                ];
                $array = [
                    'title'          => $package->title,
                    'slug'           => $package->key,
                    'package_id'     => $id,
                    'type'           => 'package',
                    'id'             => MenuItem::where('slug',$package->key)->where('type','package')->value('id'),
                    'children'       => [[]],
                ];
                array_push($olddata,$array);
                $status = MenuItem::create($data);
            }
//            Session::put('data', $olddata);
        }
        else{
            $olddata = json_decode($menu->content,true);
            foreach($ids as $id){
                $package = Package::find($id);
                $data =[
                    'title'         => $package->title,
                    'slug'          => $package->key,
                    'package_id'    => $id,
                    'type'          => 'package',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                $status = MenuItem::create($data);
            }
            foreach($ids as $id){
                $package = Package::find($id);
                $array['title']         = $package->title;
                $array['slug']          = $package->key;
                $array['package_id']    = $id;
                $array['type']          = 'package';
                $array['id']            = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->value('id');
                $array['children']      = [[]];
                array_push($olddata[0],$array);
                $data_encode = json_encode($olddata);
                $status = $menu->update(['content'=>json_encode($olddata)]);
            }
        }

        if($status){
            Session::flash('success','Package added in '.$this->panel);
        }else{
            Session::flash('error','Package could not be added in '.$this->panel);
        }
    }

    public function syncData($request){
        $menu                   = Menu::findOrFail($request->menuid);
        $content                = $request->data;
        $newdata                = [];
        $newdata['location']    = $request->location ?? $menu->location;
        $newdata['title']       = $request->title ?? $menu->title;
        $newdata['content']     = json_encode($content);
        return $menu->update($newdata);
    }


//    public function addPost(Request $request){
//        $menuid         = $request->menuid;
//        $ids            = $request->ids;
//$menu       = $this->model->findOrFail($menuid);
//        if($menu->content == ''){
//            foreach($ids as $id){
//                $post = Blog::find($id);
//                $data =[
//                    'title'         => $post->title,
//                    'slug'          => $post->slug,
//                    'blog_id'       => $id,
//                    'type'          => 'post',
//                    'menu_id'       => $menuid,
//                    'created_by'    => Auth::user()->id,
//                ];
//                $status  = MenuItem::create($data);
//            }
//        }else{
//            $olddata = json_decode($menu->content,true);
//            foreach($ids as $id){
//                $post = Blog::find($id);
//                $data =[
//                    'title'         => $post->title,
//                    'slug'          => $post->slug,
//                    'blog_id'       => $id,
//                    'type'          => 'post',
//                    'menu_id'       => $menuid,
//                    'created_by'    => Auth::user()->id,
//                ];
//                $status  = MenuItem::create($data);
//            }
//            foreach($ids as $id){
//                $post               = Blog::find($id);
//                $array['title']     = $post->title;
//                $array['slug']      = $post->slug;
//                $array['blog_id']   = $post->id;
//                $array['type']      = 'post';
//                $array['id']        = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->orderby('id','DESC')->value('id');
//                $array['children']  = [[]];
//                array_push($olddata[0],$array);
//                $status             = $menu->update(['content'=>json_encode($olddata)]);
//            }
//        }
//
//        if($status){
//            Session::flash('success','Blog added in '.$this->panel);
//        }else{
//            Session::flash('error','Blog could not be added in '.$this->panel);
//        }
//    }

    public function addCustomLink(Request $request){
        $data       = $request->all();
        $menuid     = $request->menuid;
        $menu       = $this->model->findOrFail($menuid);
        if($menu->content == ''){
            $data =[
                'title'         => $request->url_text,
                'slug'          => $request->url,
                'type'          => 'custom',
                'menu_id'       => $menuid,
                'created_by'    => Auth::user()->id,
            ];
            $status = MenuItem::create($data);
        }else{
            $olddata = json_decode($menu->content,true);
            $data =[
                'title'         => $request->url_text,
                'slug'          => $request->url,
                'type'          => 'custom',
                'menu_id'       => $menuid,
                'created_by'    => Auth::user()->id,
            ];
            MenuItem::create($data);
            $array = [];
            $array['title']     = $request->url_text;
            $array['slug']      = $request->url;
            $array['type']      = 'custom';
            $array['id']        = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->orderby('id','DESC')->value('id');
            $array['children']  = [[]];
            array_push($olddata[0],$array);
            $status = $menu->update(['content'=>json_encode($olddata)]);
        }
        if($status){
            Session::flash('success','Custom link added in '.$this->panel);
        }else{
            Session::flash('error','Custom link could not be added in '.$this->panel);
        }
    }

    public function updateMenuItem(Request $request){
        $data           = $request->all();
        $target         = $request->input('target');
        $item           = MenuItem::findOrFail($request->id);
        if($target == null){
            $data['target'] = NULL;
        }
        $status         = $item->update($data);
        if($status){
            Session::flash('success','Menu Item Updated Successfully');
        }else{
            Session::flash('error','Menu Item could not be updated');
        }
        return redirect()->back();
    }

    public function deleteMenuItem($id,$key,$in='',$inside=''){
        $menuitem       = MenuItem::findOrFail($id);
        $menus           = $this->model->where('id',$menuitem->menu_id)->first();

        if($menus->content != ''){
            $data       = json_decode($menus->content,true);
            if($in == ''){

                //collecting the inner child ID to remove them from table
                $childarray = array();
                if(array_key_exists('children', $data[0][$key])) {
                    //first child of the main menu (second layer)
                    foreach ($data[0][$key]['children'][0] as $k=>$child){
                        $childarray[] = $child['id'];
                        //looping through that child list to check if it has inner child (third layer)
                        if (array_key_exists('children', $data[0][$key]['children'][0][$k])){
                            //if second layer has children, then looping through them to get its ID
                            foreach ($data[0][$key]['children'][0][$k]['children'][0] as $l=>$inner){
                                $childarray[] = $inner['id'];
                            }
                        }
                    }
                }

                if($childarray){
                    //removing the collected item list ID here
                    foreach ($childarray as $id){
                        $childitem = MenuItem::find($id);
                        $childitem->forceDelete();
                    }
                }

                unset($data[0][$key]);
                //removing the ID from the structure
                $newdata = json_encode($data);
                $menus->update(['content'=>$newdata]);
            }
            else if($inside == ''){

                //checking if the removed menu child item has additional child or not.
                if(array_key_exists('children', $data[0][$key]['children'][0][$in])){
                    //if it does, looping over value to get the menu items ID and keeping it in array to remove them later.
                    foreach ($data[0][$key]['children'][0][$in]['children'][0] as $child) {
                        foreach ($child as $c){
                            $childitem = MenuItem::findOrFail($c);
                            $childitem->forceDelete();
                        }
                    }
                }
                //removing the deleted menu item and its children from the menu content structure
                unset($data[0][$key]['children'][0][$in]);
                $newdata = json_encode($data);
                $menus->update(['content'=>$newdata]);
            }else{
                unset($data[0][$key]['children'][0][$in]['children'][0][$inside]);
                $newdata = json_encode($data);
                $menus->update(['content'=>$newdata]);
            }
        }

        //deleting the menu item here
        $status = $menuitem->forceDelete();
        if($status){
            Session::flash('success','Menu Item Deleted Successfully');

        }else{
            Session::flash('error','Menu Item could not be Deleted');
        }
        return redirect()->back();
    }



}
