<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employe extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employe';

    protected $fillable = [
        'name', 'email', 'password','photo'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
