<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function classList(){
        return $this->belongsTo(ClassList::class);
    }

    protected $casts = [
        'admission_starting_date' => 'datetime:Y-m-d',
        'admission_ending_date' => 'datetime:Y-m-d',
        'class_start' => 'datetime:Y-m-d',
    ];

}
