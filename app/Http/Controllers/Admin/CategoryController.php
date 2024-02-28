<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::get();
        return view('admin.category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'slug' => 'required|unique:categories',
            'icon' => 'required',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $icon= $request->file('icon');
        if($icon)
        {
            $sitebanner_doctor_name= $icon->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/category/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $icon->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $category->icon = $image_url;
            }
        }
        $category->save();

        return redirect()->back()->withSuccess('Category saved successfully');
      
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
        $data = Category::findOrFail($id);
        return view('admin.category.edit', compact('data'));
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
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $icon= $request->file('icon');
        if($icon)
        {
            $sitebanner_doctor_name= $icon->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/category/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $icon->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $category->icon = $image_url;
            }
        }
        $category->save();

        return redirect()->back()->withSuccess('Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->withFail('Category deleted successfully');
    }
}
