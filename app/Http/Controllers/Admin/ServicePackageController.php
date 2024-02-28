<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServicePackage;
use App\Http\Controllers\Controller;

class ServicePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas=ServicePackage::latest()->get();
       return view('admin.service_package.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $services=Service::where('status',1)->get();
       return view('admin.service_package.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new ServicePackage();
        $data->service_id=$request->service_id;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->technology=$request->technology;
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
        return redirect()->back()->withSuccess('Service Package Created successfully');
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
        $data=ServicePackage::find($id);
        $services=Service::where('status',1)->get();
        return view('admin.service_package.edit',compact('data','services'));
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
        $data=ServicePackage::find($id);
        $data->service_id=$request->service_id;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->technology=$request->technology;
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
        return redirect()->back()->withSuccess('Service Package Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=ServicePackage::find($id);
        $data->delete();
        return redirect()->back()->withSuccess('Service Package Deleted successfully');


    }
}
