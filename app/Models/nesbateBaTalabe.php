<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nesbateBaTalabe extends Model
{
    protected $table = 'nesbate_ba_talabe';
    public $timestamps = false;
    protected $fillable = ['id', 'title'];
}
