<?php

namespace App\Http\Controllers;

use App\Models\batches;
use App\Models\cources;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\NotifyMail;
use App\Models\instructor;
use App\Models\request as ModelsRequest;
use Illuminate\Support\Facades\Mail;

class welcomeController extends Controller
{
    public function index()
    {
        $batch = batches::where('date', '>=', Carbon::now())->orderBy('date','ASC')->select(['name','date','time','days'])->get();
        $course = cources::whereIn('name',['Software Testing (Manual+ Automation)','Java Development','Python Development'])->select(['name','file','duration','seats','course_status','id'])->get();
        return view('welcome', ['batch' => $batch, 'course' => $course]);
    }

    public function mail(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'comment'=>$request->comment ?? '',
            'course'=>$request->course ?? '',
            'token'=>$request->token,
        ];

        ModelsRequest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'message'=>$request->comment ?? '',
            'course'=>$request->course ?? '',
            'type'=>$request->token,
        ]);

        Mail::to('inquiry@fusion-institute.com')->send(new NotifyMail($data));

        if (Mail::failures()) {
            return response()->json([
                'flag'=>'error',
                'msg'=>'Something went wrong please try again'
            ]);
        } else {
            $msg='';
            if ($request->token == 'message') {
                $msg='message send successfully';
            } elseif ($request->token == 'callback') {
                $msg='Callback requested successfully';
            }
            elseif ($request->token == 'visit') {
                $msg='Visit requested successfully';
            }
            return response()->json([
                'flag'=>'success',
                'msg'=>$msg
            ]);
        }
    }
}
