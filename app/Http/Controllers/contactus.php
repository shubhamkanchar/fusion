<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactus extends Controller
{
    public function contact_us(Request $request)
    {
        return view('contact-us');
    } 
}
