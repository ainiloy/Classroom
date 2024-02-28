<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Lesion;
use App\Models\OnlineClass;
use App\Models\HomeWork;
use App\Models\StudyMaterial;
use App\Models\Notice;


class AjaxController extends Controller
{

    public function get_batch(Request $request)
    {
        $course_id = $request->course_id;

        $batchs  = Batch::where('course_id', $course_id)->get();
        return view('ajax.get_batch', compact('batchs'));

    }

    public function get_class(Request $request)
    {
        $batch_id = $request->batch_id;

        $classes  = OnlineClass::where('batch_id', $batch_id)->get();
        return view('ajax.get_class', compact('classes'));

    }

    public function get_homework(Request $request)
    {
        $batch_id = $request->batch_id;

        $home_works  = HomeWork::where('batch_id', $batch_id)->get();
        return view('ajax.get_homework', compact('home_works'));

    }

    public function get_notice(Request $request)
    {
        $batch_id = $request->batch_id;

        $notices  = Notice::where('batch_id', $batch_id)->get();
        return view('ajax.get_notice', compact('notices'));

    }

    public function get_studymaterial(Request $request)
    {
        $batch_id = $request->batch_id;

        $study_materials  = StudyMaterial::where('batch_id', $batch_id)->get();
        return view('ajax.get_studymaterial', compact('study_materials'));

    }

    public function get_lesion(Request $request)
    {
        $course_id = $request->course_id;
        $lesions  = Lesion::where('course_id', $course_id)->get();
        return view('ajax.get_lesion', compact('lesions'));

    }

}
