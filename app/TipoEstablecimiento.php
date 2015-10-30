<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstablecimiento extends Model
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
