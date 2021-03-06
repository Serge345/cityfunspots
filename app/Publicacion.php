<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{

  protected $fillable = [
          'id_usuario',
          'id_establecimiento',
          'contenido',
             ];

   public function usuario(){
         return $this->belongsTo('App\User');
       }
   public function establecimiento(){
          return $this->belongsTo('App\Establecimiento');
       }
}
