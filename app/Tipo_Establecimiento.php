<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Establecimiento extends Model
{
    //

      protected $fillable = [
              'nombre',
              'descripcion',
                 ];

    public function establecimientos(){
      return $this->belongsTo('App\Establecimiento');
    }

}
