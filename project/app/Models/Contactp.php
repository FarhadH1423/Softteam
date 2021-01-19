<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactp extends Model
{ 
    protected $fillable = ['name', 'email','picture','url','details','mail','mobile'];
    public $timestamps= false; 
} 

