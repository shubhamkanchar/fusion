<?php

namespace App\Http\Controllers;

use App\Models\batches as ModelsBatches;
use Illuminate\Http\Request;
use Carbon\Carbon;
class batches extends Controller
{
    public function batches(Request $request)
    {
        $batch=ModelsBatches::where('date', '>=', Carbon::now())->orderBy('date','ASC')->get();
        $onbatch=ModelsBatches::where('date', '<', Carbon::now())->orderBy('date','ASC')->get();
        return view('batches',['batch'=>$batch,'onbatch'=>$onbatch]);
    } 
}
