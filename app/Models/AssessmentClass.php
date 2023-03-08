<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentClass extends Model
{
    public function assessment(){
        return $this->belongsTo(Assessment::class,'id','assessment_id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'class_id');
    }
}
