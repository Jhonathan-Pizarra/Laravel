<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConcertIdColumnFestival extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('festival_id');
            //establece el resource id como un FK
            $table->foreign('festival_id')->references('id')->on('festivals')->onDelete('restrict');
            //reestricción: si el registro padre (festival) se intenta eliminar se va a reestringir, si ese está asignado a un concierto
            //...aquí necesito una retroalimentaicón porque pensaría mejro que, un concierto no se puede eliminar si está asignado a un festival!

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
            $table->dropForeign(['festival_id']);
        });
    }
}
