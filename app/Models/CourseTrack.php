<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTrack extends Model
{
    public function coursetracklevel(){
        return $this->hasMany(UserLevelCourseTrack::class,'id','course_track_id');
     }
}
