<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function coursetracklevel(){
        return $this->hasMany(UserLevelCourseTrack::class,'id','level_id');
     }
}
