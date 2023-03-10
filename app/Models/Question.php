<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function topic(){
        return $this->belongsTo(Topic::class,'id','topic_id');
    }
}
