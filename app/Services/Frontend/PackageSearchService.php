<?php

namespace App\Services\Frontend;

use App\Models\Backend\Activity\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PackageSearchService {


    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.activity.package.';
    private Package $model;

    public function __construct()
    {
        $this->model        = new Package();
    }

    public function getSearchedPackages(Request $request){

        $data['all_packages']   = $this->model->query();
        if($request['title']){
            $data['all_packages']->where('title', 'LIKE', '%' . $request['title'] . '%');
        }
        if($request['package_category_id']){
            $data['all_packages']->where('package_category_id', $request['package_category_id']);
        }
        if($request['country_id']){
            $data['all_packages']->where('country_id', $request['country_id']);
        }
        session()->forget(['title','package_category_id','country_id']);
        return $data['all_packages']->active()->descending()->get();
    }

}
