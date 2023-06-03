<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\PageRequest;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Backend\Page\Page;
use App\Models\Backend\Page\PageSection;
use App\Services\PageService;
use App\Traits\Crud;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PageController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.page.';
    protected string $view_path     = 'backend.page.';
    protected string $panel         = 'Page';
    protected string $folder_name   = 'page';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;
    private PageService $pageService;

    public function __construct(PageService $pageService)
    {
        $this->model            = new Page();
        $this->pageService      = $pageService;
        $this->image_path       = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR);
    }

    public function getDataForDataTable(Request $request): JsonResponse
    {
        return $this->pageService->getDataForDatatable($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageRequest $request
     * @return JsonResponse
     */
    public function store(PageRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['key' => $this->model->changeTokey($request['title'])]);
            $request->request->add(['created_by' => auth()->user()->id ]);

            if($request->hasFile('image_input')){
                $image_name = $this->uploadImage($request->file('image_input'),'1920','765');
                $request->request->add(['image'=>$image_name]);
            }
            $page = $this->model->create($request->all());

            $this->storeSections($request, $page);


            Session::flash('success',$this->panel.' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }

    public function storeSections($request,$page){
        $sorted_sections   = $request['sorted_sections'];
        $section_position  = $request['position'];

        //number of sections as per required
        $faq_list          = $request['faq_list'] ?? 1;

        //gallery section heading
        $gallery_heading     = $request['gallery_title'];
        $gallery_subheading  = $request['gallery_subtitle'];

        if($sorted_sections){
            foreach ($sorted_sections as $key => $section) {
                $section_name = str_replace("_", " ", $section);
                if ($section == 'faq') {
                    PageSection::create([
                        'page_id'       => $page->id,
                        'title'         => $section_name,
                        'slug'          => $section,
                        'list_number_1' => $faq_list,
                        'position'      => $section_position[$key],
                        'created_by'    => $request['created_by'],
                    ]);

                }elseif ($section == 'gallery'){
                    PageSection::create([
                        'page_id'       => $page->id,
                        'title'         => $section_name,
                        'slug'          => $section,
                        'list_number_1' => $gallery_heading,
                        'list_number_2' => $gallery_subheading,
                        'position'      => $section_position[$key],
                        'created_by'    => $request['created_by'],
                    ]);
                }else{
                    PageSection::create([
                        'page_id'       => $page->id,
                        'title'         => $section_name,
                        'slug'          => $section,
                        'position'      => $section_position[$key],
                        'created_by'    => $request['created_by'],
                    ]);
                }
            }
        }else{
            PageSection::create([
                'page_id'       => $page->id,
                'title'         => 'basic section',
                'slug'          => 'basic_section',
                'position'      => 1,
                'created_by'    => $request['created_by'],
            ]);
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit($id)
    {
        $this->page_method      = 'edit';
        $this->page_title       = 'Edit '.$this->panel;
        $data                   = [];
        $data['row']            = $this->model->find($id);
        $data['section_slug']   = $data['row']->pageSections->pluck('slug')->toArray();

        return view($this->loadView($this->view_path.'edit'), compact('data'));
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
}
