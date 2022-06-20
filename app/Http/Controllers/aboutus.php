<?php

namespace App\Http\Controllers;

use App\Models\cources;
use App\Models\instructor;
use Illuminate\Http\Request;

class aboutus extends Controller
{
    public function about_us(Request $request)
    {
        $instructor = instructor ::all();
        return view('about-us',['instructor'=>$instructor]);
    } 
}
