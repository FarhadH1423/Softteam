<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    protected $fillable = ['title', 'details','picture','btnname','btnurl','checks'];
    public $timestamps= false;
}
