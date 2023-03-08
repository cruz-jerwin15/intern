<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function assessment(){
        return $this->belongsTo(Assessment::class,'id','assessment_id');
    }
    public function questions(){
        return $this->hasMany(Question::class,'topic_id');
       }
}
