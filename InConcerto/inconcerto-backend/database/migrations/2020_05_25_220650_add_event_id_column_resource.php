<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConcertIdColumnResource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('resource_id');
            //establece el resource id como un FK
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('restrict');
            //reestricción: si el registro padre (resource) se intenta eliminar se va a reestringir, si ese está asignado a un concierto

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
            $table->dropForeign(['resource_id']);
        });
    }
}
