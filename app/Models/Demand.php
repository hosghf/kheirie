<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = ['student_code_meli'];
    public function student(){
       return $this->belongsTo('App\Models\Student', 'student_code_meli', 'code_meli');
    }
}
