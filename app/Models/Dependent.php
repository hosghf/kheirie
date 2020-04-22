<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    public function provider(){
        $this->belongsTo('App\Models\Provider');
    }
}
