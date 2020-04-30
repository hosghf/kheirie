<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function students(){
        return $this->hasMany('App\Models\Student');
    }
    public function Incomes(){
        return $this->hasMany('App\Models\Income', 'school_code', 'id');
    }
}
