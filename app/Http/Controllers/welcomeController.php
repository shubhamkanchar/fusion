<?php

namespace App\Http\Controllers;

use App\Models\batches;
use App\Models\cources;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;

class welcomeController extends Controller
{
    public function index()
    {
        $batch = batches::where('date', '>=', Carbon::now())->get();
        $course = cources::all();
        return view('welcome', ['batch' => $batch, 'course' => $course]);
    }

    public function mail(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'comment'=>$request->comment ?? '',
            'token'=>$request->token,
        ];

        Mail::to('fusionpune1@gmail.com')->send(new NotifyMail($data));

        if (Mail::failures()) {
            return response()->json([
                'flag'=>'error',
                'msg'=>'Something went wrong please try again'
            ]);
        } else {
            if ($request->token == 'message') {
                $msg='message send successfully';
            } elseif ($request->token == 'callback') {
                $msg='Callback requested successfully';
            }
            return response()->json([
                'flag'=>'success',
                'msg'=>$msg
            ]);
        }
    }
}
