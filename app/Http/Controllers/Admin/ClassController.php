<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\ClassList;
use Toastr;

class ClassController extends Controller
{

    public function index()
    {
        $classes = ClassList::with('course')->get();
        return view('admin.class.index', compact('classes'));
    }

    public function create()
    {
        $courses = Course::get();

        return view('admin.class.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'nullable',
            'class' => 'required',
            'lesson*' => 'required',
        ]);

        $data = new ClassList();
        $data->course_id = $request->course_id;
        $data->class=$request->class;
        $data->lesson = json_encode($request->lesson);

        $data->save();

        return redirect()->route('admin.class.index')->withSuccess('Class insert successfully');

    }

    public function show($id)
    {
        //
    }


    public function edit(ClassList $class)
    {
        $courses = Course::get();

        return view('admin.class.edit', compact('courses', 'class'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'course_id' => 'required',
        //     'class' => 'required',
        //     'lesson' => 'required',
        // ]);
        $data = ClassList::findOrFail($id);
        $data->course_id = $request->course_id;
        $data->class=$request->class;
        $data->lesson = json_encode($request->lesson);

        $data->save();

        return redirect()->route('admin.class.index')->withSuccess('Class updated successfully');
    }

    public function destroy(ClassList $class)
    {
        $data = $class->delete();

        return redirect()->route('admin.class.index')->withSuccess('Class deleted successfully');
    }
}
