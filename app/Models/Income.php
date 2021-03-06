<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function typeOfIncome(){
        return $this->belongsTo('App\Models\typeOfIncome', 'type', 'id');
    }

    public function school(){
        return $this->belongsTo('App\Models\School', 'school_code', 'id');
    }
}
