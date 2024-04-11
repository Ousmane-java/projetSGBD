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
        Schema::table('Avis', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'avis_ibfk_1')->references(['idEtudiant'])->on('Etudiant');
            $table->foreign(['idCours'], 'avis_ibfk_2')->references(['idCours'])->on('Cours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Avis', function (Blueprint $table) {
            $table->dropForeign('avis_ibfk_1');
            $table->dropForeign('avis_ibfk_2');
        });
    }
};
