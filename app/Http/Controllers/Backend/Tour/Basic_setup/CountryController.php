<?php

namespace App\Http\Controllers\Backend\Tour\Basic_setup;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Backend\Tour\CountryRequest;
use App\Http\Requests\Backend\UserRequest;
use App\Models\Backend\Tour\Country;
use App\Models\Backend\User;
use App\Services\PackageService;
use App\Traits\Crud;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CountryController extends BackendBaseController
{
    use Crud;
    protected string $module        = 'backend.';
    protected string $base_route    = 'backend.tour.basic_setup.country.';
    protected string $view_path     = 'backend.tour.basic_setup.country.';
    protected string $panel         = 'Country';
    protected string $folder_name   = 'country';
    protected string $page_title, $page_method, $image_path, $file_path;
    protected object $model;


    public function __construct()
    {
        $this->model            = new Country();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CountryRequest $request
     * @return JsonResponse
     */
    public function store(CountryRequest $request)
    {
        DB::beginTransaction();
        try {
            $request->request->add(['key' => $this->model->changeTokey($request['title'])]);
            $request->request->add(['created_by' => auth()->user()->id ]);

            $this->model->create($request->all());
            Session::flash('success',$this->panel.' was created successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error',$this->panel.'  was not created. Something went wrong.');
        }

        return response()->json(route($this->base_route.'index'));
    }
}
