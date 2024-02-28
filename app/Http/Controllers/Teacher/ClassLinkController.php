<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Batch;
use App\Models\Vanue;
use App\Models\Course;
use App\Models\Lesion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClassLink;

class ClassLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=ClassLink::latest()->get();
        return view('teacher.class_link.index',compact('datas'));
    }
    public function all()
    {

        $datas=ClassLink::latest()->get();
        return view('teacher.class_link.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches=Batch::where('status',1)->get();
        $courses=Course::where('status',1)->get();
        $class_lessons=Lesion::where('status',1)->get();
        $vanues=Vanue::where('status',1)->get();
        return view('teacher.class_link.create',compact('batches','courses','class_lessons','vanues'));
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

            'course_id' => 'required',
            'batch_id'=>'required',
            'class_lesson_id'=>'required',
            'vanue_id'=>'required',
            'class_link'=>'required',
            'join_link'=>'required',
            'host_id'=>'required',
            'meeting_id'=>'required',
            'meeting_password'=>'required',
            'meeting_user'=>'required'

        ]);

       $data = new ClassLink();

       $data->course_id = $request->course_id;
       $data->batch_id = $request->batch_id;
       $data->class_lesson_id = $request->class_lesson_id;
       $data->vanue_id = $request->vanue_id;
       $data->class_link = $request->class_link;
       $data->join_link = $request->join_link;
       $data->host_id = $request->host_id;
       $data->meeting_id = $request->meeting_id;
       $data->meeting_password = $request->meeting_password;
       $data->meeting_user = $request->meeting_user;
       $data->start_date = $request->start_date;
       $data->start_time = $request->start_time;
       $data->end_date = $request->end_date;
       $data->end_time = $request->end_time;
       $data->status = $request->status;
       $data->save();

        return redirect()->back()->withSuccess('ClassLink saved successfully');
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
        //
        $data=ClassLink::find($id);
        $batches=Batch::where('status',1)->get();
        $courses=Course::where('status',1)->get();
        $class_lessons=Lesion::where('status',1)->get();
        $vanues=Vanue::where('status',1)->get();
        return view('teacher.class_link.edit',compact('data','batches','courses','class_lessons','vanues'));

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
        $validated = $request->validate([

            'course_id' => 'required',
            'batch_id'=>'required',
            'class_lesson_id'=>'required',
            'vanue_id'=>'required',
            'class_link'=>'required',
            'join_link'=>'required',
            'host_id'=>'required',
            'meeting_id'=>'required',
            'meeting_password'=>'required',
            'meeting_user'=>'required'

        ]);

       $data =ClassLink::find($id);

       $data->course_id = $request->course_id;
       $data->batch_id = $request->batch_id;
       $data->class_lesson_id = $request->class_lesson_id;
       $data->vanue_id = $request->vanue_id;
       $data->class_link = $request->class_link;
       $data->join_link = $request->join_link;
       $data->host_id = $request->host_id;
       $data->meeting_id = $request->meeting_id;
       $data->meeting_password = $request->meeting_password;
       $data->meeting_user = $request->meeting_user;
       $data->start_date = $request->start_date;
       $data->start_time = $request->start_time;
       $data->end_date = $request->end_date;
       $data->end_time = $request->end_time;
       $data->status = $request->status;
       $data->save();

        return redirect()->back()->withSuccess('ClassLink Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ClassLink::findOrFail($id);
        $data->delete();

        return redirect()->back()->withFail('ClassLink deleted successfully');
    }

    public function searchForClass()
    {
       $courses=Course::where('status',1)->get();
       $batches=Batch::where('status',1)->get();
       return view('teacher.class_link.search_for_class',compact('courses','batches'));
    }

    public function searchResult(Request $request)
    {
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');


        // Perform the filtering based on the selected criteria
        $datas =ClassLink::where('course_id', $courseId)
            ->where('batch_id', $batchId)

            ->get();



        // Return the filtered data as JSON
        $html = view('teacher.class_link.search_result', compact('datas'))->render();

        // Return the filtered data as JSON
        return response()->json(['html' => $html]);
    }

    public function searchForAttendance()
    {
       $courses=Course::where('status',1)->get();
       $batches=Batch::where('status',1)->get();
       $lessions=Lesion::where('status',1)->get();
       return view('teacher.class_link.search_for_attendance',compact('courses','batches','lessions'));
    }

    public function searchAttendance(Request $request)
    {
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');
        $lessionId=$request->input('lession_id');


        // Perform the filtering based on the selected criteria
        $datas =ClassLink::where('course_id', $courseId)
            ->where('batch_id', $batchId)
            ->where('class_lesson_id',$lessionId)

            ->get();



        // Return the filtered data as JSON
        $html = view('teacher.class_link.search_attendance', compact('datas'))->render();

        // Return the filtered data as JSON
        return response()->json(['html' => $html]);
    }
}
