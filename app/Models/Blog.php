<?php

namespace App\Models;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }
}
