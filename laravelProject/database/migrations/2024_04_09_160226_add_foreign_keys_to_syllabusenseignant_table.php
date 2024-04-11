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
        Schema::table('syllabusenseignant', function (Blueprint $table) {
            $table->foreign(['idEnseignant'], 'syllabusenseignant_ibfk_1')->references(['idEnseignant'])->on('enseignant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idCours'], 'syllabusenseignant_ibfk_2')->references(['idCours'])->on('cours')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('syllabusenseignant', function (Blueprint $table) {
            $table->dropForeign('syllabusenseignant_ibfk_1');
            $table->dropForeign('syllabusenseignant_ibfk_2');
        });
    }
};
