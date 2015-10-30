<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
     return $this->hasMany('App\Tipo_Establecimiento');

    protected $fillable = [
         'nombre',
         'direccion',
         'latitud',
         'longitud',
            ];
}
