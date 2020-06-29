<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function typeOfIncome(){
        return $this->belongsTo('App\Models\typeOfIncome', 'type', 'id');
    }
}
