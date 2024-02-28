<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function lesion(){
        return $this->belongsTo('App\Models\Lesion', 'lesion_id');
    }


}
