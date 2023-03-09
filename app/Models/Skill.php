<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function specialization(){
        return $this->belongsTo(Specialization::class,'specialization_id');
    }
}
