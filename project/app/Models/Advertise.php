<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $fillable = ['title', 'details','picture'];
    public $timestamps= false;
}

