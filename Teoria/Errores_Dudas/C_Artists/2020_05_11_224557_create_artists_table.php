<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id'); //Un campo entero autoincrementable: Id

            $table->string('name');
            $table->string('lastName');
            $table->string('dni_passport'); //Esto debo de controlar porque depende si es un artista nacional o extranjero
            $table->string('nationality');
            $table->string('comingFrom');
            $table->string('gender');
            $table->string('phone');
            $table->string('email')->unique();
            //$table->boolean('passage'); se vincula al itinerario
            //$table->string('orchest'); se vincula a la banda
            $table->string('band');
            $table->string('instrument');
            $table->string('foodGroup');//, array('Vegano', 'Vegetariano','Omnívoro', 'Alimentación Macrobiótica', 'Crudista'));

            //Estos atributos son opcionales, o sea que pueden ser llenados con un valor "vació"
            $table->boolean('video');
            $table->string('emergencyContact'); //por ejemplo, Erick Ramirez
            $table->string('emergencyPhone');
            $table->string('emergencyMail');

            $table->timestamps(); //maneja la fecha actual del servidor, y su actualización en la BD

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
