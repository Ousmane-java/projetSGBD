<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gestionrapport', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'gestionrapport_ibfk_1')->references(['idAdmin'])->on('administrateur')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idRapport'], 'gestionrapport_ibfk_2')->references(['idRapport'])->on('rapport')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gestionrapport', function (Blueprint $table) {
            $table->dropForeign('gestionrapport_ibfk_1');
            $table->dropForeign('gestionrapport_ibfk_2');
        });
    }
};
