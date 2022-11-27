<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\batches;
use App\Models\cources;
use App\Models\instructor;
use App\Models\pdfs;
use App\Models\request as ModelsRequest;
use App\Models\User;
use Illuminate\Support\Facades\File;

class Manager extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $r_count=ModelsRequest::count();
        $p_count=ModelsRequest::where('status',0)->count();
        $c_count=ModelsRequest::where('status',1)->count();
        return view('manager.home',['r_count'=>$r_count,'p_count'=>$p_count,'c_count'=>$c_count]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function request_list()
    {
        $data=ModelsRequest::orderBy('created_at','desc')->get();
        return view('admin.request.list',['data'=>$data]);
    }

    public function request_update(Request $request)
    {
        ModelsRequest::where('id',$request->id)->update(['status'=>1]);
        return redirect()->route('manager.request_list')->with('success','request updated successfully');
    }
}
