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

class HomeController extends Controller
{
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $r_count=ModelsRequest::count();
        $u_count=User::where('type',0)->count();
        $b_count=batches::count();
        $c_count=cources::count();
        return view('manager.home',['r_count'=>$r_count,'u_count'=>$u_count,'b_count'=>$b_count,'c_count'=>$c_count]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
