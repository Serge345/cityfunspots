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
            $table->integer('id_tipo')->unsigned();
            $table->String('nombre');
            $table->String('direccion');
            $table->String('latitud')->nullable();
            $table->String('longitud')->nullable();
            $table->timestamps();

            $table->foreing('id_tipo')
              ->references->('id')->on('tipoEstablecimiento')
              ->onUpdate('cascade')
              ->onDelete('cascade');

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
