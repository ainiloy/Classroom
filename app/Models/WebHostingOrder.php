<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebHostingOrder extends Model
{
    use HasFactory;
    public function webhosting()
    {
        return $this->belongsTo(WebHosting::class,'webhosting_id','id');
    }
}
