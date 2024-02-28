<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Thana;
use App\Models\User;
use App\Models\Teacher;
use App\Models\AskQuestion;
use App\Models\Course;
use Auth;
use Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('teacher')->first();
        return view('teacher.dashboard', compact('user'));
    }

    public function information()
    {
        $user = Auth::user();
        $districts = District::get();
        $thanas = Thana::get();
        
        return view('teacher.profile.information', compact('user', 'districts', 'thanas'));
    }

    public function update_profile(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'district_id' => 'required',
            'thana_id' => 'required',
            'qualification' => 'required',
            'description' => 'required',

        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->district_id = $request->district_id;
        $data->thana_id = $request->thana_id;
        $data->email = $request->email;
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
        $data->Update();

        Teacher::updateOrCreate(
            ['user_id' => $data->id],
            [
            'user_id' => $data->id ?? null,
            'qualification' => $request->qualification ?? null,
            'description' => $request->description ?? null,
        ]);


        return redirect()->back()->withSuccess('Data updated successfully');


    }

   public function update_password(Request $request)
    {


        $data = User::where('id', Auth::user()->id)->first();
        if($request->current_password){
            
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

    public function comming_soon()
    {
        return view('teacher.comming_soon');
    }

    public function support_answer()
    {
        $datas = AskQuestion::orderBy('id', 'desc')->paginate(50);
        return view('teacher.support_question.support_answer', compact('datas'));

    }

    public function edit_support_answer($id)
    {
        $data = AskQuestion::find($id);

        $courses = Course::get();

        return view('teacher.support_question.edit_support_answer', compact('data', 'courses'));

    }


    public function update_support_answer(Request $request, $id)
    {

        $data = AskQuestion::find($id);
        $data->question_answer = $request->question_answer;
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->withSuccess('Update successfully');


    }

    public function delete_support_answer($id)
    {
        $data = AskQuestion::find($id);
        $data->delete();

        return redirect()->back()->withFail('Delete successfully');

    }


}
