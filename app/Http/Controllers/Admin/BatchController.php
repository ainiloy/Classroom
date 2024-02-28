<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Batch;
use Str;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Batch::paginate(10);
        return view('admin.batch.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        return view('admin.batch.create', compact('courses'));
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
            'name' => 'required',
        ]);

        $batch = new Batch();
        $batch->course_id = $request->course_id;
        $batch->name = $request->name;
        $batch->slug = Str::slug($request->name);
        $batch->status = $request->status;
        $batch->save();

        return redirect()->back()->withSuccess('Batch saved successfully');
      
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
        $data = Batch::findOrFail($id);

        $courses = Course::get();

        return view('admin.batch.edit', compact('data', 'courses'));
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
        $batch = Batch::findOrFail($id);
        $batch->course_id = $request->course_id;
        $batch->name = $request->name;
        $batch->slug = Str::slug($request->name);
        $batch->status = $request->status;
        $batch->save();

        return redirect()->back()->withSuccess('Batch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch = Batch::findOrFail($id);
        $batch->delete();

        return redirect()->back()->withFail('Batch deleted successfully');
    }
}
