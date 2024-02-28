<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::with('user')->get();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    public function create()
    {
        $students = User::where('role_id', 2)->get();

        return view('admin.testimonial.create', compact('students'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'student_id' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'nullable',
            'status' => 'required',
        ]);


        $data = new Testimonial();
        $data->student_id = $request->student_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/testimonial/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }

        $data->save();

        return redirect()->back()->withSuccess('Testimonial saved successfully');
      
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $students = User::where('role_id', 2)->get();
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit', compact('testimonial', 'students'));
    }

    public function update(Request $request, $id)
    {
        $data = Testimonial::findOrFail($id);
        $data->student_id = $request->student_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/testimonial/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $old_image = $data->image;
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
                $data->image = $image_url;
            }


        }

        $data->save();

        return redirect()->back()->withSuccess('Testimonial updated successfully');
    }

    public function destroy($id)
    {

        $data = Testimonial::where('id', $id)->first();
        $data->delete();

        return redirect()->back()->withFail('Testimonial deleted successfully');
    }
}
