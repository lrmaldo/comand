<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrucel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->comment('una titulo de la imagen');
            $table->text('descripcion')->comment('una descripcion de la imagen');
            $table->string('url_imagen')->comment('se guarda el url de la imagen');
            $table->timestamps();
            
        });
    }

    /* 
    carrucel 
id (int)
titulo (string 250)
descripcion (250)
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrusel');
    }
}
