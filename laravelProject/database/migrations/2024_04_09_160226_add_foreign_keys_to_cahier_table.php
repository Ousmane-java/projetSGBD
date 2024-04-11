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
        Schema::table('cahier', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'cahier_ibfk_1')->references(['idEtudiant'])->on('etudiant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idEnseignant'], 'cahier_ibfk_2')->references(['idEnseignant'])->on('enseignant')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cahier', function (Blueprint $table) {
            $table->dropForeign('cahier_ibfk_1');
            $table->dropForeign('cahier_ibfk_2');
        });
    }
};
