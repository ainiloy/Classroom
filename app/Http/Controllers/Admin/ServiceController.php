<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Service::latest()->get();
        return view('admin.service.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Service();
        $data->title=$request->title;
        $data->slug=preg_replace('/\s+/u', '-', trim($request->title));
        $data->short_description=$request->short_description;
        $data->business_plan=$request->business_plan;
         // Filter the features data to remove empty items
         $filteredFeatures = array_filter($request->input('service_feature'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredFeatures)) {
            $data->service_feature = json_encode($filteredFeatures);
        }
         // Filter the features data to remove empty items
         $filteredSupportCharge = array_filter($request->input('support_charge'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredSupportCharge)) {
            $data->support_charge = json_encode($filteredSupportCharge);
        }
         // Filter the features data to remove empty items
         $filteredTraining = array_filter($request->input('training'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredTraining)) {
            $data->training = json_encode($filteredTraining);
        }
        $data->additional_cost_one=$request->additional_cost_one;
        $data->cost_one=$request->cost_one;
        $data->additional_cost_two=$request->additional_cost_two;
        $data->cost_two=$request->cost_two;
        $data->additional_cost_three=$request->additional_cost_three;
        $data->cost_three=$request->cost_three;
        $data->additional_cost_four=$request->additional_cost_four;
        $data->cost_four=$request->cost_four;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->save();
        return redirect()->back()->withSuccess('Service Created successfully');
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
        $data=Service::find($id);
        return view('admin.service.edit',compact('data'));
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
        $data=Service::find($id);
        $data->title=$request->title;
        $data->slug=preg_replace('/\s+/u', '-', trim($request->title));
        $data->short_description=$request->short_description;
        $data->business_plan=$request->business_plan;
         // Filter the features data to remove empty items
         $filteredFeatures = array_filter($request->input('service_feature'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredFeatures)) {
            $data->service_feature = json_encode($filteredFeatures);
        }
         // Filter the features data to remove empty items
         $filteredSupportCharge = array_filter($request->input('support_charge'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredSupportCharge)) {
            $data->support_charge = json_encode($filteredSupportCharge);
        }
         // Filter the features data to remove empty items
         $filteredTraining = array_filter($request->input('training'), function ($item) {
            return !empty($item);
        });
        // Save the filtered features as JSON
        if (!empty($filteredTraining)) {
            $data->training = json_encode($filteredTraining);
        }
        $data->additional_cost_one=$request->additional_cost_one;
        $data->cost_one=$request->cost_one;
        $data->additional_cost_two=$request->additional_cost_two;
        $data->cost_two=$request->cost_two;
        $data->additional_cost_three=$request->additional_cost_three;
        $data->cost_three=$request->cost_three;
        $data->additional_cost_four=$request->additional_cost_four;
        $data->cost_four=$request->cost_four;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->save();
        return redirect()->back()->withSuccess('Service  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Service::find($id);
        $data->delete();
        return redirect()->back()->withSuccess('Service Deleted successfully');
    }
}
