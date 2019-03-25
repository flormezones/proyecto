<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     protected $fillable = [
        'email','password','edad'
    ];
}
