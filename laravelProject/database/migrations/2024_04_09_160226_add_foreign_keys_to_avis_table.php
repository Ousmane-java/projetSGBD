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
        Schema::table('avis', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'avis_ibfk_1')->references(['idEtudiant'])->on('etudiant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idCours'], 'avis_ibfk_2')->references(['idCours'])->on('cours')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avis', function (Blueprint $table) {
            $table->dropForeign('avis_ibfk_1');
            $table->dropForeign('avis_ibfk_2');
        });
    }
};
