<?php

namespace App\Http\Controllers;

use App\Models\cources as ModelsCources;
use Illuminate\Http\Request;

class cources extends Controller
{
    public function cources(Request $request)
    {
        $course=ModelsCources::orderBy('created_at','DESC')->paginate(6);
        return view('cources',['course'=>$course]);
    } 

    public function details(Request $request)
    {
        $course=ModelsCources::find($request->id);
        return view('details',['course'=>$course]);
    }

}
