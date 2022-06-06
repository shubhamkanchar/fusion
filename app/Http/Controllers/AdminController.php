<?php

namespace App\Http\Controllers;

use App\Models\batches;
use App\Models\cources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Home');
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

            cources::where('id',$request->id)->update([
                'name'=>$request->name,
                'file'=>$file_name,
                'seats'=>$request->seats,
                'duration'=>$request->duration,
                'fees'=>$request->fees,
                'desc'=>$request->desc,
                'tools'=>$request->tools,
                'syllabus'=>$request->syllabus,
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
            ]);

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

            cources::create([
                'name'=>$request->name,
                'file'=>$file_name,
                'seats'=>$request->seats,
                'duration'=>$request->duration,
                'fees'=>$request->fees,
                'desc'=>$request->desc,
                'tools'=>$request->tools,
                'syllabus'=>$request->syllabus,
            ]);

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
}
