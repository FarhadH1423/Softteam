<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title', 'details','picture','btntext','btnurl'];
    public $timestamps= false;

    protected $table = 'aboutus';
}

