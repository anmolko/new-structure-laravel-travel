<?php

namespace App\Services;

use App\Models\Backend\Page\Page;
use App\Models\Backend\Page\PageSection;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PageService {


    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.page.';
    protected string $view_path     = 'backend.page.';

    private DataTables $dataTables;
    private Page $model;

    public function __construct(DataTables $dataTables)
    {
        $this->model        = new Page();
        $this->dataTables = $dataTables;
    }

    public function getDataForDatatable(Request $request){

        $query = $this->model->query()->orderBy('created_at', 'desc');

        return $this->dataTables->eloquent($query)
            ->editColumn('section',function ($item){
                $params = [
                    'page'    => $item,
                ];
                return view($this->view_path.'partials.index_section_list', compact('params'));
            })
            ->editColumn('status',function ($item){
                $params = [
                    'id'            => $item->id,
                    'status'        => $item->status,
                    'base_route'    => $this->base_route,
                ];
                return view($this->module.'includes.status', compact('params'));
            })
            ->editColumn('action',function ($item){
                $params = [
                    'id'            => $item->id,
                    'base_route'    => $this->base_route,
                ];
                return view($this->view_path.'.includes.dataTable_action', compact('params'));

            })
            ->filterColumn('section', function($query, $keyword) {
                $query->whereHas('pageSections', function($section) use($keyword){
                    $section->where('title', 'like', "%" . $keyword . "%");
                });
            })
            ->rawColumns(['section','action','status'])
            ->addIndexColumn()
            ->make(true);
    }

    public function syncSections($request,$page, $db_section_slug=[])
    {

        $sorted_sections = $request['sorted_sections'];
        $section_position = $request['position'];

        //number of sections as per required
        $faq_list = $request['faq_list'] ?? 1;

        //gallery section heading
        $gallery_heading = $request['gallery_title'];
        $gallery_subheading = $request['gallery_subtitle'];

        if ($sorted_sections) {
            foreach ($sorted_sections as $key => $section) {
                $section_name = str_replace("_", " ", $section);
                if ($section == 'faq') {
                    $data = [
                        'page_id' => $page->id,
                        'title' => $section_name,
                        'slug' => $section,
                        'list_number_1' => $faq_list,
                        'position' => $section_position[$key],
                        'status' => $request['status']
                    ];
                    if (!in_array($section, $db_section_slug)) {
                        $data['created_by'] = $request['created_by'];
                        PageSection::create($data);
                    } else {
                        $data['updated_by'] = $request['updated_by'];
                        $update = PageSection::where('page_id', $request['page_id'])->where('slug', $section)->first();
                        $update->update($data);
                    }


                }
                elseif ($section == 'gallery') {
                    $data = [
                        'page_id' => $page->id,
                        'title' => $section_name,
                        'slug' => $section,
                        'list_number_1' => $gallery_heading,
                        'list_number_2' => $gallery_subheading,
                        'position' => $section_position[$key],
                    ];
                    if (!in_array($section, $db_section_slug)) {
                        $data['created_by'] = $request['created_by'];
                        PageSection::create($data);
                    } else {
                        $data['updated_by'] = $request['updated_by'];
                        $update = PageSection::where('page_id', $request['page_id'])->where('slug', $section)->first();
                        $update->update($data);
                    }
                }
                else {
//                    dd($section);

                    $data = [
                        'page_id'   => $page->id,
                        'title'     => $section_name,
                        'slug'      => $section,
                        'position'  => $section_position[$key],
                        'status'    => $request['status']
                    ];
                    if (!in_array($section, $db_section_slug)) {
                        $data['created_by'] = $request['created_by'];
                        PageSection::create($data);
                    } else {
                        $data['updated_by'] = $request['updated_by'];
                        $update = PageSection::where('page_id', $request['page_id'])->where('slug', $section)->first();
                        $update->update($data);
                    }
                }
            }

            if (count($db_section_slug) > 0){
                foreach ($db_section_slug as $slug) {
                    if (!in_array($slug, $sorted_sections)) {

                        $section = PageSection::where('page_id', $request['page_id'])->where('slug', $slug)->first();

                        if($section->slug == 'gallery'){
                            foreach ($section->pageSectionGalleries as $gallery){
                                if (!empty($gallery->filename) && !empty($gallery->resized_name)) {
                                    @unlink(public_path() . '/storage/images/section_element/gallery/' . $gallery->filename);
                                    @unlink(public_path() . '/storage/images/section_element/gallery/' . $gallery->resized_name);
                                }
                                $gallery->forceDelete();
                            }
                        }

                        foreach ($section->pageSectionElements as $element){
                            if($element->image){
                                $this->deleteImage($element->image);
                            }
                            if($element->list_image){
                                $this->deleteImage($element->list_image);
                            }
                            $element->forceDelete();
                        }
                        $section->forceDelete();
                    }
                }
            }
        } else {
            PageSection::create([
                'page_id' => $page->id,
                'title' => 'basic section',
                'slug' => 'basic_section',
                'position' => 1,
                'created_by' => $request['created_by'],
            ]);
        }
    }

}
