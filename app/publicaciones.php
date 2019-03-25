<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
     protected $fillable = [
        'categoria','zonabarrio','direccion','titulo','descripcion','condicionlegal'
    ];
}
