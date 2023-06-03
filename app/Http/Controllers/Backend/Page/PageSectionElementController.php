<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\PageRequest;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Backend\Page\Page;
use App\Models\Backend\Page\PageSection;
use App\Models\Backend\Page\PageSectionElement;
use App\Models\Backend\Page\PageSectionGallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class PageSectionElementController extends BackendBaseController
{
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.page.';
    protected string $view_path     = 'backend.page.';
    protected string $panel         = 'Page section elements';
    protected string $folder_name   = 'section_element';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;

    public function __construct()
    {
        $this->model            = new PageSectionElement();
        $this->image_path       = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR);
    }

    public function show($id)
    {
        $this->page_method          = 'show';
        $this->page_title           = 'Create '.$this->panel;
        $data                       = [];
        $data['row']                = Page::active()->find($id);
        $data['page_section']       = $data['row']->pageSections->pluck('slug','id')->toArray();
        $data['section_elements']   = [];

        foreach ($data['row']->pageSections as $section){
            $data['section_elements'][$section->slug] = $section->pageSectionElements;
        }
        return view($this->loadView($this->view_path.'show'), compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PageRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $section_name = $request['section_name'];
        $section_id   = $request['page_section_id'];

        DB::beginTransaction();
        try {
            $request->request->add(['created_by' => auth()->user()->id ]);
            $request->request->add(['status' => true ]);

            if($section_name == 'basic_section') {
                if ($request->hasFile('basic_image_input')) {
                    $image_name = $this->uploadImage($request->file('basic_image_input'), '400', '545');
                    $request->request->add(['image' => $image_name]);
                }
                PageSectionElement::create($request->all());
            }

            if($section_name == 'map_description') {
                PageSectionElement::create($request->all());
            }
            if($section_name == 'faq') {
                $faq_num   = $request['list_number_1'];
                for ($i=0;$i<$faq_num;$i++){
                    $heading     =  array_key_exists($i, $request->input('title')) ? $request->input('title')[$i] : null;
                    $subheading  =  array_key_exists($i, $request->input('subtitle')) ? $request->input('subtitle')[$i] : null;

                    $data=[
                        'page_section_id'     => $section_id,
                        'title'               => $heading,
                        'subtitle'            => $subheading,
                        'list_title'          => $request['list_title'][$i],
                        'list_description'    => $request['list_description'][$i],
                        'status'              => $request['status'],
                        'created_by'          => $request['created_by'],
                    ];
                    PageSectionElement::create($data);
                }
            }

            Session::flash('success',str_replace('_',' ',$section_name).' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

//        return response()->json(route($this->base_route.'index'));

        return response()->json(route($this->module.'section-element.show',$request['page_id']));
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
                $image_name = $this->updateImage($request->file('image_input'),$data['row']->image,'1920','765');
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

    public function multipleSectionUpdate(Request $request){


    }

    public function getGallery(Request $request,$id)
    {
        $images = PageSectionGallery::where('page_section_id',$id)->get()->toArray();

        if (count($images) > 0){
            foreach($images as $image){
                $tableImages[] = $image['filename'];
            }
            $storeFolder = public_path('storage/images/section_elements/');
            $file_path = public_path('storage/images/section_elements/');
            $files = scandir($storeFolder);
            foreach ( $files as $file ) {
                if ($file !='.' && $file !='..' && in_array($file,$tableImages)) {
                    $obj['name'] = $file;
                    $file_path = public_path('storage/images/section_elements/').$file;
                    $obj['size'] = filesize($file_path);
                    $obj['path'] = url('/storage/images/section_elements/'.$file);
                    $data[] = $obj;
                }

            }
            return response()->json($data);
        }
    }


    public function uploadGallery(Request $request,$id)
    {
        $page_section                 =  PageSection::with('page')->find($id);
        if($page_section==null || $page_section=="null"){
            return Response::json([
                'message' => 'Page Section Not Found'
            ], 400);
        }

        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = $page_section->page->slug."_page_gallery_".date('YmdHis') . uniqid();
            $save_name = $name . '.' . $photo->getClientOriginalExtension();

            $resize_name = "Thumb_".$name . '.' . $photo->getClientOriginalExtension();

            Image::make($photo)
                ->orientate()
                // ->resize(500, 500)
                ->save($this->image_path . '/' . $resize_name);

            $photo->move($this->image_path, $save_name);

            $upload = new PageSectionGallery();
            $upload->page_section_id    = $page_section->id;
            $upload->upload_by          = Auth::user()->id;
            $upload->filename           = $save_name;
            $upload->resized_name       = $resize_name;
            $upload->original_name      = basename(pathinfo($photo->getClientOriginalName(),PATHINFO_FILENAME));
            $upload->save();
        }

        return response()->json(['success'=>$save_name]);
    }

    public function deleteGallery(Request $request)
    {
        $filename = $request->get('filename');
        $uploaded_image = PageSectionGallery::where('filename', $filename)->first();

        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->image_path . '/' . $uploaded_image->filename;
        $resized_file = $this->image_path . '/' . $uploaded_image->resized_name;

        if (file_exists($file_path)) {
            @unlink($file_path);
        }

        if (file_exists($resized_file)) {
            @unlink($resized_file);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response::json(['success' => $filename], 200);
    }



}
