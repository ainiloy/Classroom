<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Lession;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesion;
use App\Models\Question;
use Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Question::orderby('id', 'desc')->paginate(50);
        return view('teacher.question.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::get();
        $lesions = Lesion::get();
        return view('teacher.question.create', compact('courses', 'lesions'));
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
            'course_id' => 'required',
            'lesion_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'option_one' => 'required',
            'option_two' => 'required',
            'option_three' => 'required',
            'option_four' => 'required',
        ]);


        $question = new Question();
        $question->course_id = $request->course_id;
        $question->lesion_id = $request->lesion_id;
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->option_one = $request->option_one;
        $question->option_two = $request->option_two;
        $question->option_three = $request->option_three;
        $question->option_four = $request->option_four;
        $question->mark = $request->mark ?? 1;
        $question->status = $request->status ?? 1;
        $question->description = $request->description;
        $question->save();

        return redirect()->back()->withSuccess('Question saved successfully');

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
        $data = Question::findOrFail($id);
        $courses = Course::get();
        $lesions = Lesion::where('course_id', $data->course_id)->get();
        return view('teacher.question.edit', compact('data', 'courses', 'lesions'));
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
        $lesion = Question::findOrFail($id);
        $lesion->course_id = $request->course_id;
        $lesion->lesion_id = $request->lesion_id;
        $lesion->question = $request->question;
        $lesion->answer = $request->answer;
        $lesion->option_one = $request->option_one;
        $lesion->option_two = $request->option_two;
        $lesion->option_three = $request->option_three;
        $lesion->option_four = $request->option_four;
        $lesion->mark = $request->mark;
        $lesion->status = $request->status ?? 1;
        $lesion->description = $request->description;
        $lesion->save();

        return redirect()->back()->withSuccess('Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->back()->withFail('Question deleted successfully');
    }
    public function searchForQt(){
        $courses=Course::where('status',1)->get();
        $batches=Lesion::where('status',1)->get();
        return view('teacher.question.search_for_qt',compact('courses','batches'));
    }
    public function  qtSearchResult(Request $request)
    {
        $courseId = $request->input('course_id');
        $batchId = $request->input('batch_id');


        // Perform the filtering based on the selected criteria
        $datas =Question::where('course_id', $courseId)
            ->where('lesion_id', $batchId)

            ->get();


        // Return the filtered data as JSON
        $html = view('teacher.question.search_result', compact('datas'))->render();

        // Return the filtered data as JSON
        return response()->json(['html' => $html]);
    }
}
