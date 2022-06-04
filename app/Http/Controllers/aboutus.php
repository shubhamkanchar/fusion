<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutus extends Controller
{
    public function about_us(Request $request)
    {
        return view('about-us');
    } 
}
