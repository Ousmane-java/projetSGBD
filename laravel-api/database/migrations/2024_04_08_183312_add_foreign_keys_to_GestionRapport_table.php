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
        Schema::table('GestionRapport', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'gestionrapport_ibfk_1')->references(['idAdmin'])->on('Administrateur');
            $table->foreign(['idRapport'], 'gestionrapport_ibfk_2')->references(['idRapport'])->on('Rapport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GestionRapport', function (Blueprint $table) {
            $table->dropForeign('gestionrapport_ibfk_1');
            $table->dropForeign('gestionrapport_ibfk_2');
        });
    }
};
