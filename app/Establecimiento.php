<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{

    protected $fillable = [
         'nombre',
         'direccion',
         'id_tipo',
         'latitud',
         'longitud',
            ];
  public function categorias(){
      return $this->hasMany('App\Tipo_Establecimiento');
  }

  public function comentarios(){
    return $this->hasMany('App\Publicacion');
  }

}
