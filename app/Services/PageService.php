<?php

namespace App\Services;

use App\Models\Backend\Page\Page;
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

}
