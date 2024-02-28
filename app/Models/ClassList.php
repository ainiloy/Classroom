<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'class',
        'lesson',
    ];

    public function course() {
        return $this->belongsTo(Course::class);

    }
}
