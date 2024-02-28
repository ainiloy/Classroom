<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsore;
use Str;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Sponsore::get();
        return view('admin.sponsore.index',compact('datas'));
    }

    public function create()
    {
        return view('admin.sponsore.create');
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
            'name' => 'required|unique:sponsores',
        ]);


        $sponsore = new Sponsore();
        $sponsore->name = $request->name;
        $sponsore->slug = Str::slug($request->name);
        $sponsore->status = $request->status;


        $image= $request->file('image');
        if($image)
        {
            $sitebanner_doctor_name= $image->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/sponsore/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $image->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $sponsore->image = $image_url;
            }
        }
        $sponsore->save();

        return redirect()->back()->withSuccess('sponsore saved successfully');
      
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
        $data = Sponsore::findOrFail($id);
        return view('admin.sponsore.edit', compact('data'));
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
        $sponsore = Sponsore::findOrFail($id);
        $sponsore->name = $request->name;
        $sponsore->slug = Str::slug($request->name);
        $sponsore->status = $request->status;
        $image= $request->file('image');
        if($image)
        {
            $sitebanner_doctor_name= $image->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/sponsore/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $image->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $sponsore->image = $image_url;
            }
        }
        $sponsore->save();

        return redirect()->back()->withSuccess('sponsore updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsore = Sponsore::findOrFail($id);
        $sponsore->delete();

        return redirect()->back()->withFail('sponsore deleted successfully');
    }
}
