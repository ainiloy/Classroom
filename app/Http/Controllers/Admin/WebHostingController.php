<?php

namespace App\Http\Controllers\Admin;

use App\Models\WebHosting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebHostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=WebHosting::latest()->get();
        return view('admin.web_hosting.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.web_hosting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new WebHosting();

        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->price=$request->price;
        $data->payment_number=$request->payment_number;
        $data->type=$request->type;
        $data->status=$request->status;
        $data->background_color=$request->background_color;
        $data->color=$request->color;
        $filteredFeatures = array_filter($request->input('feature'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredFeatures)) {
            $data->feature = json_encode($filteredFeatures);
        }
        $data->save();
        return redirect()->back()->withSuccess('web Hosting Created successfully');
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
        $data=WebHosting::find($id);
        return view('admin.web_hosting.edit',compact('data'));
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
        $data=WebHosting::find($id);
        $data->title=$request->title;
        $data->type=$request->type;
        $data->slug=Str::slug($request->title);
        $data->price=$request->price;
        $data->payment_number=$request->payment_number;

        $data->status=$request->status;
        $data->background_color=$request->background_color;
        $data->color=$request->color;
        $filteredFeatures = array_filter($request->input('feature'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredFeatures)) {
            $data->feature = json_encode($filteredFeatures);
        }
        $data->save();
        return redirect()->back()->withSuccess('web Hosting Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=WebHosting::find($id);
        $data->delete();
        return redirect()->back()->withSuccess('web Hosting Deleted successfully');

    }
}
