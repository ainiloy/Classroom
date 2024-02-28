<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\User;
use Str;
use Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('role_id', 4)->paginate(2);
        return view('admin.teacher.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
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
            // 'image' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'nid' => 'required|unique:users',
        ]);

        $user_data = User::orderBy('id', 'desc')->first();

        $data = new User();
        $data->user_id = 10000+(($user_data?$user_data->id:0)+1);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->nid = $request->nid;
        $data->password = Hash::make($request->password);
        $data->password_str = $request->password;

        $data->role_id = 4;
        $data->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/teacher/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }

        $data->save();

        return redirect()->back()->withSuccess('Teacher saved successfully');
      
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
        $data = User::findOrFail($id);
        return view('admin.teacher.edit', compact('data'));
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
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->nid = $request->nid;
        $data->password = Hash::make($request->password);
        $data->password_str = $request->password;
        $data->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/teacher/';
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

        return redirect()->back()->withSuccess('Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->withFail('Teacher deleted successfully');
    }
}
