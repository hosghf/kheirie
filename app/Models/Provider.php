<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function dependents(){
        return $this->hasMany('App\Models\Dependent');
    }

    public function student(){
        return $this->belongsTo('Appp\Models\Student');
    }
}
