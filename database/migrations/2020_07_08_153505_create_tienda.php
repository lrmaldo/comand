<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienda', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->text('facebook')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('instagram')->nullable();
            $table->timestamps();
        });
    }
    /* 
    id (int)
nombre (string 500)
direccion (text)
descripcion (text)
telefono (string 250)
correo (string 250)
facebook (string 500)
 */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tienda');
    }
}
