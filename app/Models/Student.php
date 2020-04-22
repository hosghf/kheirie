<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function school(){
        return $this->belongsTo('App\Models\School');
    }

    public function provider(){
        return $this->hasOne('App\Models\Provider');
    }

    public function demands(){
        return $this->hasMany('App\Models\Demand', 'student_code_meli', 'code_meli');
    }
}
