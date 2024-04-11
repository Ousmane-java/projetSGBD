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
        Schema::table('avisetudiant', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'avisetudiant_ibfk_1')->references(['idEtudiant'])->on('etudiant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idCours'], 'avisetudiant_ibfk_2')->references(['idCours'])->on('cours')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avisetudiant', function (Blueprint $table) {
            $table->dropForeign('avisetudiant_ibfk_1');
            $table->dropForeign('avisetudiant_ibfk_2');
        });
    }
};
