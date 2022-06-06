<?php

namespace App\Http\Controllers;

use App\Models\batches as ModelsBatches;
use Illuminate\Http\Request;

class batches extends Controller
{
    public function batches(Request $request)
    {
        $batch=ModelsBatches::orderBy('created_at','DESC')->paginate(5);
        return view('batches',['batch'=>$batch]);
    } 
}
