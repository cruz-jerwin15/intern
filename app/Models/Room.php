<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function studentclass(){
        return $this->hasMany(StudentClass::class,'class_id');
       
    }
    public function assessclass(){
        return $this->hasMany(AssessmentClass::class,'id','class_id');
    }
}
