<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seminer;
use App\Models\Teacher;

class SeminerController extends Controller
{

    public function index()
    {
        $seminers = Seminer::with('teacher')->get();
        return view('admin.seminer.index',compact('seminers'));
    }

    public function create()
    {
        $teachers = Teacher::with('user')->get();

        return view('admin.seminer.create', compact('teachers'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'teacher_id' => 'required',
            'date' => 'required',
            'title' => 'required',
            'time' => 'required',
            'online_or_offline' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);


        $data = new Seminer();
        $data->teacher_id = $request->teacher_id;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->time = $request->time;
        $data->online_or_offline = $request->online_or_offline;
        $data->link = $request->link;
        $data->status = $request->status;

        $data->save();

        return redirect()->back()->withSuccess('Course saved successfully');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $seminer = Seminer::findOrFail($id);
        $teachers = Teacher::with('user')->get();

        return view('admin.seminer.edit', compact('seminer','teachers'));
    }

    public function update(Request $request, $id)
    {
        $data = Seminer::findOrFail($id);
        $data->teacher_id = $request->teacher_id;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->time = $request->time;
        $data->online_or_offline = $request->online_or_offline;
        $data->link = $request->link;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Course updated successfully');
    }

    public function destroy($id)
    {

        $data = Seminer::where('id', $id)->first();
        $data->delete();

        return redirect()->back()->withFail('Course deleted successfully');
    }
}
