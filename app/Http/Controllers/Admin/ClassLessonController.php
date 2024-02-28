<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClassLesson;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ClassLesson::latest()->get();
        return view('admin.class_lesson.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.class_lesson.create');
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
        ]);

       $data = new ClassLesson();

       $data->name = $request->name;
       $data->slug = Str::slug($request->name);
       $data->status = $request->status;
       $data->save();

        return redirect()->back()->withSuccess('ClassLesson saved successfully');
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
        $data = ClassLesson::findOrFail($id);



        return view('admin.class_lesson.edit', compact('data'));
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
       $data = ClassLesson::findOrFail($id);

       $data->name = $request->name;
       $data->slug = Str::slug($request->name);
       $data->status = $request->status;
       $data->save();

        return redirect()->back()->withSuccess('ClassLesson updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = ClassLesson::findOrFail($id);
       $data->delete();

        return redirect()->back()->withFail('ClassLesson deleted successfully');
    }
}
