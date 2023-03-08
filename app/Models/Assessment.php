<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    public function topics(){
        return $this->hasMany(Topic::class,'assessment_id');
       }
    public function assessclass(){
        return $this->hasMany(AssessmentClass::class,'assessment_id');
    }
    
}
