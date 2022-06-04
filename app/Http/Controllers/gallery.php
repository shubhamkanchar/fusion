<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gallery extends Controller
{
    public function gallery(Request $request)
    {
        return view('gallery');
    } 
}
