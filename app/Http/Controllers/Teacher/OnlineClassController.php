<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Batch;
use App\Models\OnlineClass;
use Str;
use Auth;

class OnlineClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = OnlineClass::paginate(50);
        return view('teacher.online_class.index',compact('datas'));
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
        return view('teacher.online_class.create', compact('courses', 'batches'));
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
            'start_date' => 'required',
            'time' => 'required',
        ]);


        $data = new OnlineClass();
        $data->teacher_id = Auth::user()->id;

        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->start_date = $request->start_date;
        $data->time = $request->time;
        $data->duration = $request->duration;
        $data->passcode = $request->passcode;
        $data->join_link = $request->join_link;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Online Class saved successfully');
      
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

        $data = OnlineClass::findOrFail($id);

        return view('teacher.online_class.edit', compact('data', 'courses', 'batches'));
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
        $data = OnlineClass::findOrFail($id);
        $data->teacher_id = Auth::user()->id;
        
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->start_date = $request->start_date;
        $data->time = $request->time;
        $data->duration = $request->duration;
        $data->passcode = $request->passcode;
        $data->join_link = $request->join_link;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Online Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OnlineClass::where('id', $id)->delete();
        return redirect()->back()->withFail('Online Class deleted successfully');
    }
}
