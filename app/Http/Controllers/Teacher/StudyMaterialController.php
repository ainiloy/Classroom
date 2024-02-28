<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Batch;
use App\Models\StudyMaterial;
use Str;
use Auth;

class StudyMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = StudyMaterial::paginate(50);
        return view('teacher.study_material.index',compact('datas'));
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
        return view('teacher.study_material.create', compact('courses', 'batches'));
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
            'date' => 'required',
        ]);


        $data = new StudyMaterial();
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->date = $request->date;
        $data->link = $request->link;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Study Material saved successfully');

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

        $data = StudyMaterial::findOrFail($id);

        return view('teacher.study_material.edit', compact('data', 'courses', 'batches'));
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
        $data = StudyMaterial::findOrFail($id);
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->title = $request->title;
        $data->date = $request->date;
        $data->link = $request->link;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Study Material updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        StudyMaterial::where('id', $id)->delete();
        return redirect()->back()->withFail('Study Material deleted successfully');
    }

    public function searchForSm(){
        $courses=Course::where('status',1)->get();
        $batches=Batch::where('status',1)->get();
        return view('teacher.study_material.search_for_sm',compact('courses','batches'));
    }
    public function  smSearchResult(Request $request)
    {
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');


        // Perform the filtering based on the selected criteria
        $datas =StudyMaterial::where('course_id', $courseId)
            ->where('batch_id', $batchId)

            ->get();



        // Return the filtered data as JSON
        $html = view('teacher.study_material.search_result', compact('datas'))->render();

        // Return the filtered data as JSON
        return response()->json(['html' => $html]);
    }
}

