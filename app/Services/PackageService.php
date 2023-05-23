<?php

namespace App\Services;

use App\Models\Backend\Tour\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PackageService {


    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.tour.package.';
    private DataTables $dataTables;
    private Package $model;

    public function __construct(DataTables $dataTables)
    {
        $this->model        = new Package();
        $this->dataTables = $dataTables;
    }

    public function getDataForDatatable(Request $request){

        $query = $this->model->query()->orderBy('created_at', 'desc');
        return $this->dataTables->eloquent($query)
            ->editColumn('country',function ($item){
                return $item->country->title ?? '-';
            })
            ->editColumn('category',function ($item){
                return $item->category->title ?? '-';
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
                return view($this->module.'.includes.dataTable_action', compact('params'));

            })
            ->filterColumn('country', function($query, $keyword) {
                $query->whereHas('country', function($country) use($keyword){
                    $country->where('title', 'like', "%" . $keyword . "%");
                });
            })
            ->filterColumn('category', function($query, $keyword) {
                $query->whereHas('category', function($category) use($keyword){
                    $category->where('title', 'like', "%" . $keyword . "%");
                });
            })
            ->rawColumns(['action','status'])
            ->addIndexColumn()
            ->make(true);
    }

}
