<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Lesion;
use Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Course::with('teacher')->get();
        return view('admin.course.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $teachers = Teacher::with('user')->get();

        return view('admin.course.create', compact('categories', 'teachers'));
    }

    /**s
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'category_id' => 'required',
            'teacher_id' => 'required',
            'price' => 'required',
            'image' => 'required',
            'admission_starting_date' => 'required',
            'admission_ending_date' => 'required',
            'class_start' => 'required',
            'time' => 'required',
        ]);


        $data = new Course();
        $data->category_id = $request->category_id;
        $data->teacher_id = $request->teacher_id;
        $data->title = $request->title;
        // $data->title_en = $request->title_en;
        $data->slug = $request->slug;
        $data->offline_or_online = $request->offline_or_online;
        $data->admission_starting_date = $request->admission_starting_date;
        $data->admission_ending_date = $request->admission_ending_date;
        $data->class_start = $request->class_start;
        $data->time = $request->time;
        $data->student_or_pro = $request->student_or_pro;
        $data->price = $request->price;
        $data->course_duration = $request->course_duration;
        $data->day = $request->day;
        $data->total_enrolled = $request->total_enrolled;
        $data->lectures = $request->lectures;
        $data->quizzes = $request->quizzes;
        $data->skill_level = $request->skill_level;
        $data->assessments = $request->assessments;
        $data->short_description = $request->short_description;
        $data->description_long = $request->description_long;
        $data->description = $request->description;
        // $data->description_en = $request->description_en;
        $data->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/course/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }

        $data->save();

        return redirect()->back()->withSuccess('Course saved successfully');
      
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
        $categories = Category::get();
        $data = Course::findOrFail($id);
        $teachers = Teacher::with('user')->get();

        return view('admin.course.edit', compact('data', 'categories', 'teachers'));
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
        $data = Course::findOrFail($id);
        $data->category_id = $request->category_id;
        $data->teacher_id = $request->teacher_id;
        $data->title = $request->title;
        // $data->title_en = $request->title_en;
        $data->slug = $request->slug;
        $data->offline_or_online = $request->offline_or_online;
        $data->admission_starting_date = $request->admission_starting_date;
        $data->admission_ending_date = $request->admission_ending_date;
        $data->class_start = $request->class_start;
        $data->time = $request->time;
        $data->student_or_pro = $request->student_or_pro;
        $data->price = $request->price;
        $data->course_duration = $request->course_duration;
        $data->day = $request->day;
        $data->total_enrolled = $request->total_enrolled;
        $data->lectures = $request->lectures;
        $data->quizzes = $request->quizzes;
        $data->skill_level = $request->skill_level;
        $data->assessments = $request->assessments;
        $data->short_description = $request->short_description;
        $data->description_long = $request->description_long;
        $data->description = $request->description;
        // $data->description_en = $request->description_en;
        $data->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/course/';
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

        return redirect()->back()->withSuccess('Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $imagePath = Course::where('id', $id)->first();
        $image = $imagePath->image;

        if (file_exists($image)) {
            unlink($image);
            Course::where('id', $id)->delete();
        }else{
            Course::where('id', $id)->delete();
        }


        return redirect()->back()->withFail('Course deleted successfully');
    }
}
