<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class batches extends Controller
{
    public function batches(Request $request)
    {
        return view('batches');
    } 
}
