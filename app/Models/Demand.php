<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    public function student(){
       return $this->belongsTo('App\Models\Student', 'student_code_meli', 'code_meli');
    }
}
