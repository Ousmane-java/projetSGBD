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
        Schema::table('Note', function (Blueprint $table) {
            $table->foreign(['idEtudiant'], 'note_ibfk_1')->references(['idEtudiant'])->on('Etudiant');
            $table->foreign(['idEnseignant'], 'note_ibfk_2')->references(['idEnseignant'])->on('Enseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Note', function (Blueprint $table) {
            $table->dropForeign('note_ibfk_1');
            $table->dropForeign('note_ibfk_2');
        });
    }
};
