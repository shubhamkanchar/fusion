<?php

namespace App\Http\Controllers;

use App\Models\batches;
use App\Models\cources;
use App\Models\instructor;
use App\Models\pdfs;
use App\Models\request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $r_count=ModelsRequest::count();
        $u_count=User::where('type',0)->count();
        $b_count=batches::count();
        $c_count=cources::count();
        return view('admin.home',['r_count'=>$r_count,'u_count'=>$u_count,'b_count'=>$b_count,'c_count'=>$c_count]);
    }

    public function add_batch()
    {
        return view('admin.batches.create');
    }

    public function create_batch(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'days' => 'required'
        ]);
        if ($request->id) {
            batches::where('id',$request->id)->update([
                'name'=>$request->name,
                'date'=>$request->date,
                'time'=>$request->time,
                'duration'=>$request->duration,
                'days'=>$request->days,
            ]);

            return redirect()->route('admin.add_batch')->with('success','Batch updated successfully');
        } else {
            batches::create([
                'name'=>$request->name,
                'date'=>$request->date,
                'time'=>$request->time,
                'duration'=>$request->duration,
                'days'=>$request->days,
            ]);

            return redirect()->route('admin.add_batch')->with('success','Batch created successfully');
        }
    }

    public function batch_list()
    {
        $data=batches::all();
        return view('admin.batches.list',['data'=>$data]);
    }

    public function update_batch(Request $request)
    {
        $data=batches::find($request->id);
        return view('admin.batches.create',['data'=>$data]);
    }

    public function batch_delete(Request $request)
    {
        batches::where('id',$request->id)->delete();
        return redirect()->route('admin.batch_list')->with('success','Batch Deleted successfully');
    }


    public function add_course()
    {
        return view('admin.course.create');
    }

    public function create_course(Request $request)
    {
        
        if ($request->id) {
            $request->validate([
                'name' => 'required',
                'seats' => 'required',
                'duration' => 'required',
                'fees' => 'required',
                'desc' => 'required',
                'for' => 'required',
                'lang' => 'required',
            ]);

            $course = cources::where('id',$request->id)->first();

            if ($request->file('file')) :
                if (isset($course->file) && !empty($course->file)) :
                    if (File::exists(public_path('uploads/course') . '/' . $course->file)) :
                        File::delete(public_path('uploads/course') . '/' . $course->file);
                    endif;
                endif;
    
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);
    
                    $path = public_path('uploads/course');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($course->file) ? $course->file : '';
            endif;

            $pdf='';
            if ($request->file('pdf')) :
                $files=$request->file('pdf');
                foreach($files as $f){
                    $cover = $f;
                    if ($cover) :
                        $pdf = time() . '-' . $cover->getClientOriginalName();
                        $pdf = str_replace(' ', '_', $pdf);
        
                        $path = public_path('uploads/pdf');
                        $cover->move($path, $pdf);
                        $pdf = $pdf;

                        pdfs::create([
                            'course_id'=>$course->id,
                            'name'=>$cover->getClientOriginalName(),
                            'file'=>$pdf,
                        ]);
                    endif;
                }
            endif;

            cources::where('id',$request->id)->update([
                'name'=>$request->name,
                'file'=>$file_name,
                'seats'=>$request->seats,
                'duration'=>$request->duration,
                'fees'=>$request->fees,
                'desc'=>$request->desc,
                'tools'=>$request->tools,
                'syllabus'=>$request->syllabus,
                'pdf'=>$pdf,
                'pre'=>$request->pre,
                'for'=> $request->for,
                'lang'=>$request->lang
            ]);

            return redirect()->route('admin.add_course')->with('success','course updated successfully');
        } else {

            $request->validate([
                'name' => 'required',
                'file' => 'required|mimes:jpeg,png,jpg',
                'seats' => 'required',
                'duration' => 'required',
                'fees' => 'required',
                'desc' => 'required',
                'for' => 'required',
                'lang' => 'required',
                'pdf'=>'required'
            ]);

            $file_name='';
            if ($request->file('file')) :
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);
    
                    $path = public_path('uploads/course');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            endif;

            
            $course=cources::create([
                'name'=>$request->name,
                'file'=>$file_name,
                'seats'=>$request->seats,
                'duration'=>$request->duration,
                'fees'=>$request->fees,
                'desc'=>$request->desc,
                'tools'=>$request->tools,
                'syllabus'=>$request->syllabus,
                'pre'=>$request->pre,
                'for'=> $request->for,
                'lang'=>$request->lang
            ]);

            $pdf='';
            if ($request->file('pdf')) :
                $files=$request->file('pdf');
                foreach($files as $f){
                    $cover = $f;
                    if ($cover) :
                        $pdf = time() . '-' . $cover->getClientOriginalName();
                        $pdf = str_replace(' ', '_', $pdf);
        
                        $path = public_path('uploads/pdf');
                        $cover->move($path, $pdf);
                        $pdf = $pdf;

                        pdfs::create([
                            'course_id'=>$course->id,
                            'name'=>$cover->getClientOriginalName(),
                            'file'=>$pdf,
                        ]);
                    endif;
                }
            endif;

            return redirect()->route('admin.add_course')->with('success','course created successfully');
        }
    }

    public function course_list()
    {
        $data=cources::all();
        return view('admin.course.list',['data'=>$data]);
    }

    public function update_course(Request $request)
    {
        $data=cources::find($request->id);
        return view('admin.course.create',['data'=>$data]);
    }

    public function course_delete(Request $request)
    {
        cources::where('id',$request->id)->delete();
        return redirect()->route('admin.course_list')->with('success','course Deleted successfully');
    }


    public function add_instructor()
    {
        $course=cources::all();
        return view('admin.instructor.create',['course'=>$course]);
    }

    public function create_instructor(Request $request)
    {
        
        if ($request->id) {
            $request->validate([
                'name' => 'required',
                'course' => 'required'
            ]);

            $instructor = instructor::where('id',$request->id)->first();

            if ($request->file('file')) :
                if (isset($instructor->file) && !empty($instructor->file)) :
                    if (File::exists(public_path('uploads/instructor') . '/' . $instructor->file)) :
                        File::delete(public_path('uploads/instructor') . '/' . $instructor->file);
                    endif;
                endif;
    
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);
    
                    $path = public_path('uploads/instructor');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            else :
                $file_name = isset($instructor->file) ? $instructor->file : '';
            endif;

            instructor::where('id',$request->id)->update([
                'name'=>$request->name,
                'file'=>$file_name,
                'course'=>$request->course,
            ]);

            return redirect()->route('admin.add_instructor')->with('success','instructor updated successfully');
        } else {

            $request->validate([
                'name' => 'required',
                'file' => 'required|mimes:jpeg,png,jpg',
                'course' => 'required',
            ]);

            if ($request->file('file')) :
                $cover = $request->file('file');
                if ($cover) :
                    $fileName = time() . '-' . $cover->getClientOriginalName();
                    $fileName = str_replace(' ', '_', $fileName);
    
                    $path = public_path('uploads/instructor');
                    $cover->move($path, $fileName);
                    $file_name = $fileName;
                endif;
            endif;

            instructor::create([
                'name'=>$request->name,
                'file'=>$file_name,
                'course'=>$request->course,
            ]);

            return redirect()->route('admin.add_instructor')->with('success','instructor created successfully');
        }
    }

    public function instructor_list()
    {
        $data=instructor::all();
        return view('admin.instructor.list',['data'=>$data]);
    }

    public function update_instructor(Request $request)
    {
        $course=cources::all();
        $data=instructor::find($request->id);
        return view('admin.instructor.create',['data'=>$data,'course'=>$course]);
    }

    public function instructor_delete(Request $request)
    {
        instructor::where('id',$request->id)->delete();
        return redirect()->route('admin.instructor_list')->with('success','instructor Deleted successfully');
    }


    public function request_list()
    {
        $data=ModelsRequest::orderBy('created_at','desc')->get();
        return view('admin.request.list',['data'=>$data]);
    }

    public function request_instructor(Request $request)
    {
        $course=cources::all();
        $data=ModelsRequest ::find($request->id);
        return view('admin.request.create',['data'=>$data,'course'=>$course]);
    }

    public function request_delete(Request $request)
    {
        ModelsRequest::where('id',$request->id)->delete();
        return redirect()->route('admin.request_list')->with('success','instructor Deleted successfully');
    }

    public function request_update(Request $request)
    {
        ModelsRequest::where('id',$request->id)->update(['status'=>1]);
        return redirect()->route('admin.request_list')->with('success','request updated successfully');
    }

    public function delete_pdf(Request $request)
    {
        $pdf=pdfs::find($request->id);
        if($pdf){
            if (File::exists(public_path('uploads/pdf') . '/' . $pdf->file)) :
                File::delete(public_path('uploads/pdf') . '/' . $pdf->file);
            endif;
        }
        pdfs::where('id',$request->id)->delete();
        return redirect()->back()->with('success',$pdf->name.' Deleted successfully');
    }
}
