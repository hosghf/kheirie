<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function dependents(){
        $this->hasMany('App\Models\Dependent');
    }

    public function student(){
        $this->belongsTo('Appp\Models\Student');
    }
}
