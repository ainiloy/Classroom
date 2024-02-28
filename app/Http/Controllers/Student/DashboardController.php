<?php

namespace App\Http\Controllers\Student;

use DB;
use Auth;
use Hash;
use App\Models\User;
use App\Models\Batch;
use App\Models\Order;
use App\Models\Thana;
use App\Models\Course;
use App\Models\Lesion;
use App\Models\Notice;
use App\Models\District;
use App\Models\HomeWork;
use App\Models\Question;
use App\Models\AskQuestion;
use App\Models\ExamSummery;
use App\Models\StudentExam;
use Illuminate\Http\Request;
use App\Models\HomeWorkAnswer;
use App\Models\HomeWorkAnswerFile;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $districts = District::get();
        $thanas = Thana::get();

        return view('student.dashboard', compact('user', 'districts', 'thanas'));
    }

    public function information()
    {
        $user = Auth::user();
        $districts = District::get();
        $thanas = Thana::get();
        return view('student.profile.information', compact('user', 'districts', 'thanas'));
    }

    public function update_profile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'mother_name' => 'required',
            'district_id' => 'required',
            'thana_id' => 'required',

        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->father_name = $request->father_name;
        $data->mother_name = $request->mother_name;
        $data->address = $request->address;
        $data->district_id = $request->district_id;
        $data->thana_id = $request->thana_id;
        $data->email = $request->email;

        $image = $request->file('image');
        if ($image) {
            $image_name = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/student/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $old_file = $data->image;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
                $data->image = $image_url;
            }
        }

        $data->Update();


        return redirect()->back()->withSuccess('Data updated successfully');
    }

    public function change_password()
    {
        $user = Auth::user();
        return view('student.profile.change_password', compact('user'));
    }


    public function update_password(Request $request)
    {

        $data = User::where('id', Auth::user()->id)->first();
        if ($request->current_password) {

            $this->validate($request, [
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            if (!(Hash::check($request->get('current_password'), $data->password))) {
                return redirect()->back()->withFail('Current Password does not match');
            }
            $data->password = Hash::make($request->password);
            $data->password_str = $request->password;
        }
        $data->save();

        return redirect()->back()->withSuccess('Password changed successfully');
    }

    public function my_courses()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();
        return view('student.profile.my_courses', compact('purchases', 'user'));
    }

    public function join_class()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();
        return view('student.profile.join_class', compact('purchases', 'user'));
    }




    public function notice()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();

        return view('student.profile.notice', compact('user', 'purchases'));
    }

    public function viewallquestions()
    {
        $user = Auth::user();
        $questions = AskQuestion::where('student_id', $user->user_id)->get();

        return view('student.profile.viewallquestions', compact('user', 'questions'));
    }

    public function delete_question($id)
    {

        $data = AskQuestion::find($id);
        $data->delete();

        return redirect()->back()->withFail('Delete successfully');
    }


    public function view_answer($id)
    {
        $user = Auth::user();

        $data = AskQuestion::find($id);

        return view('student.profile.view_answer', compact('data', 'user'));
    }


    public function askaquestion()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();

        return view('student.profile.askaquestion', compact('user', 'purchases'));
    }

    public function save_question(Request $request)
    {

        $this->validate($request, [
            'question_id' => 'required|unique:ask_questions',
            'course_id' => 'required',
            'question_title' => 'required',
            'question_description' => 'required',
        ]);

        $user = Auth::user();

        $data = new AskQuestion();
        $data->student_id = $user->user_id;
        $data->question_id = $request->question_id;
        $data->course_id = $request->course_id;
        $data->question_title = $request->question_title;
        $data->question_description = $request->question_description;
        $data->status = 0;
        $data->save();

        return redirect()->back()->withSuccess('Your question have been submitted.');
    }

    public function study_material()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();

        return view('student.profile.study_material', compact('user', 'purchases'));
    }
    public function studentOrder()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('student.profile.orders', compact('orders','user'));
    }
    public function notice_description($id)
    {

        $user = Auth::user();
        $notice = Notice::where('id', $id)->first();
        $course = Course::where('id', $notice->course_id)->first();
        $batch = Batch::where('id', $notice->batch_id)->first();
        return view('student.profile.notice_description', compact('notice', 'user', 'course', 'batch'));
    }

    public function homework_submit()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();
        return view('student.profile.homework_submit', compact('purchases', 'user'));
    }

    public function view_homework($id)
    {
        $user = Auth::user();
        $home_work = HomeWork::where('id', $id)->first();
        $course = Course::where('id', $home_work->course_id)->first();
        $batch = Batch::where('id', $home_work->batch_id)->first();
        return view('student.profile.view_homework', compact('home_work', 'user', 'course', 'batch'));
    }

    public function submit_homework($id)
    {
        $user = Auth::user();
        $home_work = HomeWork::where('id', $id)->first();
        $course = Course::where('id', $home_work->course_id)->first();
        $batch = Batch::where('id', $home_work->batch_id)->first();
        return view('student.profile.submit_homework', compact('home_work', 'user', 'course', 'batch'));
    }

    public function student_submit_homework(Request $request, $id)
    {


        $user = Auth::user();
        $home_work = HomeWork::where('id', $id)->first();
        $course = Course::where('id', $home_work->course_id)->first();
        $batch = Batch::where('id', $home_work->batch_id)->first();

        $already_answer = HomeWorkAnswer::where('student_id', $user->user_id)->where('home_work_id', $id)->first();
        if ($already_answer) {
            return redirect()->back()->withFail('You have already submitted your homework.');
        }

        $answer = new HomeWorkAnswer();
        $answer->student_id = $user->user_id;
        $answer->home_work_id = $home_work->id;
        $answer->answer = $request->homework_answer;
        $answer->mark = '';
        $answer->status = 0;
        $answer->save();


        $image = $request->file('homework_answer_file');

        if ($image) {

            foreach ($image as $key => $value) {
                $answer_file = new HomeWorkAnswerFile();
                $answer_file->home_work_id = $home_work->id;
                $answer_file->home_work_answer_id = $answer->id;

                $image_name = time() . '_' . $value->getClientOriginalName();
                $image_full_name = $image_name;
                $upload_path = 'files/homework_answer_file/';
                $image_url = $upload_path . $image_full_name;
                $success = $value->move($upload_path, $image_full_name);
                if ($success) {
                    $answer_file->homework_answer_file = $image_url;
                }

                $answer_file->save();
            }
        }


        return redirect()->back()->withSuccess('Your home work submitted.');
    }

    public function student_exam()
    {
        $user = Auth::user();
        $purchases = DB::table('purchases')->where('student_id', $user->user_id)->get();
        return view('student.profile.student_exam', compact('purchases', 'user'));
    }

    public function questions(Request $request)
    {
        $user = Auth::user();

        $course_id = $request->course_id;
        $lesion_id = $request->lesion_id;

        $already_attend = StudentExam::where('user_id', $user->id)->where('course_id', $course_id)->where('lesion_id', $lesion_id)->count();

        $course = Course::findOrFail($course_id);
        $lesion = Lesion::findOrFail($lesion_id);

        if ($already_attend == 0) {

            $questions = Question::where('course_id', $course_id)->where('lesion_id', $lesion_id)->take($lesion->total_qs)->where('status', 1)->get();
            return view('student.exam.questions', compact('questions', 'user', 'course', 'lesion'));
        } else {

            return redirect()->back()->withFail('Already attend this Exam.');
        }
    }


    public function submit_answer(Request $request)
    {
        $user = Auth::user();



        $question_id = $request->question_id;
        $applicant_answers = $request->option;

        $course_id = $request->course_id;
        $lesion_id = $request->lesion_id;


        if ($question_id) {

            $sl = 1;
            foreach ($question_id as $key => $value) {
                if (!empty($value)) {

                    $question = Question::where('id', $value)->first();

                    $exam = new StudentExam();
                    $exam->user_id = $user->id;
                    $exam->sl = $sl++;
                    $exam->course_id = $course_id;
                    $exam->lesion_id = $lesion_id;
                    $exam->question_id = $value;
                    $exam->applicant_answer = $applicant_answers[$value] ?? '';
                    $exam->correct_answer = $question->answer;

                    if (isset($applicant_answers[$value])) {
                        if ($applicant_answers[$value] == $question->answer) {
                            $exam->isCorrect = 1;
                            $exam->mark = $question->mark;
                        } else {
                            $exam->isCorrect = 0;
                            $exam->mark = 0;
                        }
                    } else {
                        $exam->isCorrect = 0;
                        $exam->mark = 0;
                    }

                    $exam->save();
                }
            }


            $correct = StudentExam::where('user_id', $user->id)->where('isCorrect', 1)->get();
            $wrong = StudentExam::where('user_id', $user->id)->where('isCorrect', 0)->get();


            $summery = new ExamSummery();
            $summery->user_id = $user->id;
            $summery->course_id = $course_id;
            $summery->lesion_id = $lesion_id;
            $summery->correct = $correct->count();
            $summery->wrong = $wrong->count();
            $summery->mark = $correct->sum('mark');
            $summery->save();


            return redirect()->route('student.exam-result', ['course_id' => $course_id, 'lesion_id' => $lesion_id]);
        }
    }


    public function exam_result($course_id, $lesion_id)
    {
        $user = Auth::user();

        $course = Course::findOrFail($course_id);
        $lesion = Lesion::findOrFail($lesion_id);

        $correct = StudentExam::where('user_id', $user->id)->where('isCorrect', 1)->get();

        $wrong = StudentExam::where('user_id', $user->id)->where('isCorrect', 0)->get();

        return view('student.exam.exam_result', compact('user', 'correct', 'wrong', 'course', 'lesion'));
    }


    public function result()
    {
        $user = Auth::user();
        $results = ExamSummery::where('user_id', $user->id)->get();

        return view('student.exam.results', compact('user', 'results'));
    }




    public function comming_soon()
    {
        return view('student.comming_soon');
    }
}
