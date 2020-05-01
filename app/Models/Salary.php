<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';
    public $timestamps = false;
    protected $fillable = ['id', 'title'];
}
