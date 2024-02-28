<?php

namespace App\Http\Controllers;

use Str;
use Auth;
use Hash;
use Session;
use App\Models\User;
use App\Models\District;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class AuthenticationController extends Controller
{
    public function register()
    {
        return view('student.register');
    }

    public function student_login()
    {
        return view('student.student_login');
    }

    public function send_otp(Request $request)
    {

        $phone = $request->phone;

        $user = User::where('phone', $phone)->first();
        $user_data = User::orderBy('id', 'desc')->first();

        if($user){
            return 'Already use this number.';
        }

        $user = new UserVerify();
        $user->phone = $phone;
        $user->otp = rand(1111,9999);
        $user->status = 0;
        $user->save();

        // $user = new User();
        // $user->user_id = '';
        // $user->phone = $phone;
        // $user->otp = rand(1111,9999);
        // $user->status = 1;
        // $user->role_id = 2;
        // $user->save();

        // User::where('id', $user->id)->update([
        //     'user_id' => 60587+(($user_data?$user_data:0)),
        // ]);
            $otp = $user->otp;
            $url = "https://bulksmsbd.net/api/smsapi";
            $api_key = '4zCnkaPjJQy9smtOf6pI';
            $senderid = 8809617611019;
            $number = urlencode($phone);
            $message = 'Your Otp Code '.$otp.' is Ready,Powered By APlusIt';

            $data = [
              "api_key" => $api_key,
              "senderid" => $senderid,
              "number" => $number,
              "message" => $message
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $response = curl_exec($ch);
            curl_close($ch);

        return 'Your OTP code send to your mobile phone.';

    }

    public function verify_otp(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'otp' => 'required',
        ]);

        $phone = $request->phone;
        $otp = $request->otp;

        // $user = User::where('phone', $phone)->where('otp', $otp)->first();
        $user = UserVerify::where('phone', $phone)->where('otp', $otp)->orderBy('id','desc')->first();

        if($user){

            Session::put('phone', $phone);
            return redirect('/student');

        }else{
            return 'OTP is incorrect.';
        }

    }

    public function student()
    {
        $phone = Session::get('phone');
        // $user = User::where('phone', $phone)->first();
        $user = UserVerify::where('phone', $phone)->first();

        $districts = District::get();

        return view('student.update_data', compact('user', 'districts'));
    }

    public function submit_registration(Request $request)
    {

        $user_data = User::orderBy('id', 'desc')->where('role_id',2)->orWhere('role_id',3)->count();
        // User::where('id', $user->id)->update([
        //     'user_id' => 60587+(($user_data?$user_data:0)),
        // ]);
        $validated = $request->validate([
            'phone' => 'required',
            'name' => 'required',
            'contact_person' => 'required',
            'email' => 'required|unique:users|',
            'nid' => 'required|unique:users|',
            'address' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'father_name' => 'required',
            'father_contact_number' => 'required',
            'gurdian_name' => 'required',
            'gurdian_contact_number' => 'required',
            'district_id' => 'required',
            'country' => 'required',
            'password' => 'required|confirmed|min:6',
            'answer' => 'required',
        ]);

        $a = $request->a;
        $b = $request->b;

        $c = $a + $b;

        $answer = $request->answer;

        if($answer == $c){

            $user = new User();
            $user->user_id = 60598+(($user_data?$user_data:0));
            $user->phone = $request->phone;
            $user->name = $request->name;
            $user->contact_person = $request->contact_person;
            $user->email = $request->email;
            $user->nid = $request->nid;
            $user->address = $request->address;
            $user->day = $request->day;
            $user->month = $request->month;
            $user->year = $request->year;
            $user->father_name = $request->father_name;
            $user->father_contact_number = $request->father_contact_number;
            $user->gurdian_name = $request->gurdian_name;
            $user->gurdian_contact_number = $request->gurdian_contact_number;
            $user->district_id = $request->district_id;
            $user->country = $request->country;
            $user->role_id = 2;
            $user->password_str = $request->password;
            $user->password = Hash::make($request->password);
            $user->save();

            $user = User::where('phone', $request->phone)->first();

            $url = "https://bulksmsbd.net/api/smsapi";
            $api_key = '4zCnkaPjJQy9smtOf6pI';
            $senderid = 8809617611019;
            $number = urlencode($request->phone);
            $message = 'Congrats '.$user->name.', Your Registration is successfully Confirmed.Your UserId '.$user->user_id.',aplusitinstitute.com';

            $data = [
              "api_key" => $api_key,
              "senderid" => $senderid,
              "number" => $number,
              "message" => $message
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $response = curl_exec($ch);
            curl_close($ch);

            return redirect('/student-login')->withSuccess('Registration Successfully Done!! Your user Id Is '.$user->user_id.' and Password '.$request->password);

        }else{

            return redirect()->back()->withError('Mathmatical answer is not correct.');

        }






    }


    public function user_login(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);


        $user = User::where('user_id', $request->user_id)->first();
        $payment_methods=PaymentMethod::where('status',1)->get();
        if($user != null){
            if(Hash::check($request->password, $user->password)){
                if($request->has('remember')){
                    auth()->login($user, true);
                }
                else{
                    auth()->login($user, false);
                }
                if(Session()->get('checkout')){
                    $total_count=Session::get('total_count');
                    $final_price=Session::get('final_price');
                    $course=Session::get('course');
                   $coupon_discount= Session::get('coupon_discount');
                   $coupon=Session::get('coupon');

                   return redirect()->route('checkout');
                    // return view('frontend_pages.checkout',compact('coupon','total_count','final_price','course','coupon_discount','payment_methods'));
                }
                else{
                    return redirect('/student/dashboard');
                }

                // return redirect()->route('distributor.dashboard');
            }
            else {
                return redirect()->back()->withFail('Credentials doesn\'t match.');
            }
        }else{
            return redirect()->back()->withFail('User Not Found!');
        }


    }




}
