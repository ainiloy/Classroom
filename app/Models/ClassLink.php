<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassLink extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo('App\Models\Course', 'course_id');
    }
    public function batch(){
        return $this->belongsTo('App\Models\batch', 'batch_id');
    }
    public function lesion(){
        return $this->belongsTo('App\Models\Lesion', 'class_lesson_id');
    }
    public function vanue(){
        return $this->belongsTo('App\Models\Vanue', 'vanue_id');
    }
}
