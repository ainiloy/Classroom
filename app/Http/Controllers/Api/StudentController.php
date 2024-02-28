<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class StudentController extends Controller
{

    public function students()
    {

        $students = User::where('role_id', 2)->where('status', 1)->get();

        return response()->json(
            [
            'students' => $students,
            'status' => 'Successful',
            ], 200 // success code
        );

    }

    public function single_student($id)
    {

        $student = User::find($id);

        return response()->json(
            [
            'student' => $student,
            'status' => 'Successful',
            ], 200 // success code
        );

    }



}
