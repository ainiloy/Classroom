<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Purchase;
use App\Models\UserVerify;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $students = User::where('role_id',2)->orWhere('role_id',3)->count();
        $latest_students = User::where('role_id',2)->orWhere('role_id',3)->orderBy('id','desc')->take(10)->get();
        $today_student = User::where('role_id',2)->where('created_at',Carbon::now())->count();
        $purchase = Purchase::where('status',1)->count();
        $latest_purchase = Purchase::orderBy('id','desc')->take(10)->get();
        $today_purchase = Purchase::where('status',1)->where('created_at',Carbon::now())->count();
        return view('admin.dashboard',compact('students','purchase','today_student','today_purchase','latest_purchase','latest_students'));
    }
    public function user_verify(){
        $user_verify = UserVerify::orderBy('id','desc')->paginate(30);
        return view('admin.user.user_verify',compact('user_verify'));
    }
}
