<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
   public function coordinator(){
    return $this->belongsTo(Coordinator::class,'id','user_id');
   }
   public function student(){
      return $this->belongsTo(Student::class,'id','user_id');
   }
   public function studentclass(){
      return $this->hasMany(StudentClass::class,'id','user_id');
   }
   public function coursetracklevel(){
      return $this->belongsTo(UserLevelCourseTrack::class,'id','user_id');
     }
}
