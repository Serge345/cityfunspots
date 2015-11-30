<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {

            $table->Integer('id_usuario')->unsigned();
            $table->Integer('id_establecimiento')->unsigned()->nullable();
            $table->Date('fecha');
            $table->String('contenido')->nullable();
            $table->timestamps();

            $table->foreign('id_usuario')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

             $table->foreign('id_establecimiento')
             ->references('id')->on('establecimientos')
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
        Schema::drop('publicacion');
    }
}
