<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Notice;
use Str;
use Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Notice::paginate(50);
        return view('teacher.notice.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        $batches = Batch::get();
        return view('teacher.notice.create', compact('courses', 'batches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'course_id' => 'required',
            'batch_id' => 'required',
        ]);




        $data = new Notice();
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;

        $file = $request->file('file');
        if($file)
        {
            $image_name= uniqid();
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'files/notice_file/';
            $image_url = $upload_path.$image_full_name;
            $success = $file->move($upload_path, $image_full_name);
            if($success)
            {
                $data->file = $image_url;
            }

        }

        $data->save();

        return redirect()->back()->withSuccess('Notice saved successfully');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::get();
        $batches = Batch::get();

        $data = Notice::findOrFail($id);

        return view('teacher.notice.edit', compact('data', 'courses', 'batches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Notice::findOrFail($id);
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;

        $file = $request->file('file');
        if($file)
        {
            $image_name= uniqid();
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'files/notice_file/';
            $image_url = $upload_path.$image_full_name;
            $success = $file->move($upload_path, $image_full_name);

            if($success)
            {
                $old_file = $data->file;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
                $data->file = $image_url;
            }


        }

        $data->save();

        return redirect()->back()->withSuccess('Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $filePath = Notice::where('id', $id)->first();
        $file = $filePath->file;

        if (file_exists($file)) {
            unlink($file);
            Notice::where('id', $id)->delete();
        }else{
            Notice::where('id', $id)->delete();
        }


        return redirect()->back()->withFail('Notice deleted successfully');
    }
}
