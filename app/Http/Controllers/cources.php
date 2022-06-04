<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cources extends Controller
{
    public function cources(Request $request)
    {
        return view('cources');
    } 

}
