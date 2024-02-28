<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vanue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VanueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Vanue::latest()->get();
        return view('admin.vanue.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vanue.create');
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

       $data = new Vanue();

       $data->name = $request->name;

       $data->status = $request->status;
       $data->save();

        return redirect()->back()->withSuccess('Vanue saved successfully');
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
        $data = Vanue::findOrFail($id);



        return view('admin.vanue.edit', compact('data'));
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
        $data = Vanue::findOrFail($id);

        $data->name = $request->name;

        $data->status = $request->status;
        $data->save();

         return redirect()->back()->withSuccess('Vanue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vanue::findOrFail($id);
        $data->delete();

         return redirect()->back()->withFail('Vanue deleted successfully');
    }
}
