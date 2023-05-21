<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\User;
use App\Models\Setting;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class DashboardController extends BackendBaseController
{
    protected string $module        = 'backend.';
    protected string $panel         = 'Dashboard';
    protected string $base_route    = 'backend.';
    protected string $view_path     = 'backend.';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data               = [];
        $data['all_users']  = User::take(4)->get();

        return view($this->loadView($this->view_path.'dashboard'), compact('data'));
    }

    public function filemanager()
    {
        return view($this->view_path.'filemanager.index');
    }

    public function themeMode(Request $request)
    {
        $id                  = $request->input('setting_id');
//        $theme               = Setting::find($id);
//        $theme->theme_mode   = $request->input('mode');
//        $status              = $theme->update();
//        return response()->json(['status'=>'success','mode'=>$theme->theme_mode]);
        return response()->json(['status'=>'success']);

    }

}
