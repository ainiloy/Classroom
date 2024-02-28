<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Str;

class PostController extends Controller
{

    public function index()
    {
        $datas = Post::get();
        return view('admin.post.index',compact('datas'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:posts',
        ]);


        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->writter = $request->writter;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->status = $request->status;
        $image= $request->file('image');
        if($image)
        {
            $sitebanner_doctor_name= $image->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/post/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $image->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $post->image = $image_url;
            }
        }
        $post->save();

        return redirect()->back()->withSuccess('Post saved successfully');
      
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Post::findOrFail($id);
        return view('admin.post.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->writter = $request->writter;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->status = $request->status;
        $image= $request->file('image');
        if($image)
        {
            $sitebanner_doctor_name= $image->getClientOriginalName();
            $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
            $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
            $upload_path = 'uploads/post/';
            $image_url = $upload_path. $sitebanner_doctor_full_name;
            $success =  $image->move(($upload_path),  $sitebanner_doctor_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($sitebanner->logo){
                //     unlink(public_path($sitebanner->logo));
                // }
                $post->image = $image_url;
            }
        }
        $post->save();

        return redirect()->back()->withSuccess('Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->withFail('Post deleted successfully');
    }
}
