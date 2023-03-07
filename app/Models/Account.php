<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
   public function coordinator(){
    return $this->belongsTo(Coordinator::class,'id','user_id');
   }
}
