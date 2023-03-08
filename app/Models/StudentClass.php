<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    public function room(){
        return $this->belongsTo(Room::class,'class_id');
    }
    public function account(){
        return $this->belongsTo(Account::class,'user_id');
    }
}
