<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function skills(){
        return $this->hasMany(Skill::class,'specialization_id');
       
    }
}
