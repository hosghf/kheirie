<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = ['id', 'title', 'text'];
}
