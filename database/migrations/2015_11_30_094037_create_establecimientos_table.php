<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
          $table->increments('id');
          $table->Integer('id_tipo')->unsigned()->nullable();
          $table->String('nombre');
          $table->String('direccion');
          $table->String('latitud')->nullable();
          $table->String('longitud')->nullable();
          $table->timestamps();

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('establecimientos');
    }
}
