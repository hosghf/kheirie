<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typeOfIncome extends Model
{
    protected $table = 'type_of_incomes';

    public function  incomes(){
        return $this->hasMany('App\Models\Income', 'type', 'id');
    }
    public function  helps(){
        return $this->hasMany('App\Models\Help', 'type', 'id');
    }

}
