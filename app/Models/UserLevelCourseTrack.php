<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevelCourseTrack extends Model
{
    public function account(){
        return $this->hasMany(Account::class,'user_id');
    }
    public function coursetrack(){
        return $this->belongsTo(CourseTrack::class,'course_track_id');
    }
    public function level(){
        return $this->belongsTo(Level::class,'level_id');
    }
}
