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
        Schema::table('AvisEtudiant', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'avisetudiant_ibfk_1')->references(['idEtudiant'])->on('Etudiant');
            $table->foreign(['idCours'], 'avisetudiant_ibfk_2')->references(['idCours'])->on('Cours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AvisEtudiant', function (Blueprint $table) {
            $table->dropForeign('avisetudiant_ibfk_1');
            $table->dropForeign('avisetudiant_ibfk_2');
        });
    }
};
