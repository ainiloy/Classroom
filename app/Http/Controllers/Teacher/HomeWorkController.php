<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Batch;
use App\Models\HomeWork;
use App\Models\HomeWorkAnswer;
use Str;
use Auth;

class HomeWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HomeWork::paginate(50);
        return view('teacher.home_work.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        $batches = Batch::get();
        return view('teacher.home_work.create', compact('courses', 'batches'));
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
            'start_date' => 'required',
            'due_date' => 'required',
            'description' => 'required',
            'marks' => 'required',
            'course_id' => 'required',
            'batch_id' => 'required',
        ]);



        $data = new HomeWork();
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->start_date = $request->start_date;
        $data->due_date = $request->due_date;
        $data->marks = $request->marks;
        $data->description = $request->description;
        $data->status = $request->status;

        $file = $request->file('pdf');
        if($file)
        {
            $image_name= uniqid();
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'files/home_work_file/';
            $image_url = $upload_path.$image_full_name;
            $success = $file->move($upload_path, $image_full_name);
            if($success)
            {
                $data->pdf = $image_url;
            }

        }

        $data->save();

        return redirect()->back()->withSuccess('HomeWork saved successfully');

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
        $courses = Course::get();
        $batches = Batch::get();

        $data = HomeWork::findOrFail($id);

        return view('teacher.home_work.edit', compact('data', 'courses', 'batches'));
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
        $data = HomeWork::findOrFail($id);
        $data->teacher_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->batch_id = $request->batch_id;
        $data->start_date = $request->start_date;
        $data->due_date = $request->due_date;
        $data->marks = $request->marks;
        $data->description = $request->description;
        $data->status = $request->status;

        $file = $request->file('pdf');
        if($file)
        {
            $image_name= uniqid();
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'files/home_work_file/';
            $image_url = $upload_path.$image_full_name;
            $success = $file->move($upload_path, $image_full_name);

            if($success)
            {
                $old_file = $data->pdf;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
                $data->pdf = $image_url;
            }


        }

        $data->save();

        return redirect()->back()->withSuccess('HomeWork updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $filePath = HomeWork::where('id', $id)->first();
        $file = $filePath->pdf;

        if (file_exists($file)) {
            unlink($file);
            HomeWork::where('id', $id)->delete();
        }else{
            HomeWork::where('id', $id)->delete();
        }


        return redirect()->back()->withFail('HomeWork deleted successfully');
    }
    public function searchForHw(){
        $courses=Course::where('status',1)->get();
        $batches=Batch::where('status',1)->get();
        return view('teacher.home_work.search_for_hw',compact('courses','batches'));
    }
    public function hwSearchResult(Request $request){
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');


        // Perform the filtering based on the selected criteria
        $datas =HomeWork::where('course_id', $courseId)
            ->where('batch_id', $batchId)

            ->get();



        // Return the filtered data as JSON
        $html = view('teacher.home_work.search_result', compact('datas'))->render();

        // Return the filtered data as JSON
        return response()->json(['html' => $html]);
    }
    public function hwEvaluation()
    {
        $courses=Course::where('status',1)->get();
        $batches=Batch::where('status',1)->get();
        return view('teacher.home_work.hw_evaluation',compact('courses','batches'));
    }
    public function hwEvaluationSearchResult(Request $request)
    {
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');

        // Perform the filtering and retrieve the related homework answers
        $homeworkCollection = HomeWork::with('homeworkAnswers')
            ->where('course_id', $courseId)
            ->where('batch_id', $batchId)
            ->get();

        // Extract the related HomeWorkAnswer records and organize them by HomeWork ID
        $homeworkAnswers = [];

        foreach ($homeworkCollection as $homework) {
            $homeworkAnswers[$homework->id] = $homework->homeworkAnswers;
        }
        $html = view('teacher.home_work.hw_evaluation_search_result', compact('homeworkAnswers'))->render();
        return response()->json(['html' => $html]);
     }
     public function updateHomeWorkAnswer(Request $request)
     {
         // Retrieve the item ID from the request
         $itemId = $request->input('item_id');

         // Fetch the HomeWorkAnswer data based on the item ID
         $homeWorkAnswer = HomeWorkAnswer::find($itemId);

         // Update the data as needed
         $homeWorkAnswer->mark = $request->input('mark');
         $homeWorkAnswer->save();

         // You can return a response if needed
         return redirect()->back()->withSuccess('HomeWork updated successfully');
     }










}
