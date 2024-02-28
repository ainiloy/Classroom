<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWorkAnswer extends Model
{
    use HasFactory;
    public function home_work()
    {
        return $this->belongsTo(HomeWork::class,'home_work_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'student_id','id');
    }
}
