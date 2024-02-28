<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminer extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'date',
        'title',
        'time',
        'online_or_offline',
        'link',
        'status',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

}
