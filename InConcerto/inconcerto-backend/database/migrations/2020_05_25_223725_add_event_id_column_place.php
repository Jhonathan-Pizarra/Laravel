<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConcertIdColumnPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id'); //unsigned porque solo serán números enteros positivios
            //establece el resource id como un FK
            $table->foreign('place_id')->references('id')->on('places')->onDelete('restrict');
            //reestricción: si el registro padre (place) se intenta eliminar se va a reestringir, si ese está asignado a un concierto

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Eliminar el FK que estamos generando con up()
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['place_id']);
        });
    }
}
