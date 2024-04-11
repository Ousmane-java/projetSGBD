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
        Schema::table('Cahier', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'cahier_ibfk_1')->references(['idEtudiant'])->on('Etudiant');
            $table->foreign(['idEnseignant'], 'cahier_ibfk_2')->references(['idEnseignant'])->on('Enseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Cahier', function (Blueprint $table) {
            $table->dropForeign('cahier_ibfk_1');
            $table->dropForeign('cahier_ibfk_2');
        });
    }
};
