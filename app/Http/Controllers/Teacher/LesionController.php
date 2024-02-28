<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesion;
use Str;

class LesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Lesion::paginate(10);
        return view('teacher.lesion.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        return view('teacher.lesion.create', compact('courses'));
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
            'name' => 'required',
            'course_id' => 'required',
        ]);


        $lesion = new Lesion();
        $lesion->course_id = $request->course_id;
        $lesion->name = $request->name;
        $lesion->total_qs = $request->total_qs ?? 0;
        $lesion->status = $request->status;
        $lesion->save();

        return redirect()->back()->withSuccess('lesion saved successfully');
      
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
        $data = Lesion::findOrFail($id);
        $courses = Course::get();
        return view('teacher.lesion.edit', compact('data', 'courses'));
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
        $lesion = Lesion::findOrFail($id);
        $lesion->course_id = $request->course_id;
        $lesion->name = $request->name;
        $lesion->total_qs = $request->total_qs;
        $lesion->status = $request->status;
        $lesion->save();

        return redirect()->back()->withSuccess('lesion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesion = Lesion::findOrFail($id);
        $lesion->delete();

        return redirect()->back()->withFail('lesion deleted successfully');
    }
}
