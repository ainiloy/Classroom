<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeWork extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function batch(){
        return $this->belongsTo('App\Models\Batch', 'batch_id');
    }
    // HomeWork.php

    public function homeworkAnswers()
    {
        return $this->hasMany(HomeWorkAnswer::class, 'home_work_id', 'id');
    }


}
