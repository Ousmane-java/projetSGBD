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
        Schema::table('DisponibiliteEnseignant', function (Blueprint $table) {
            $table->foreign(['idEnseignant'], 'disponibiliteenseignant_ibfk_1')->references(['idEnseignant'])->on('Enseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DisponibiliteEnseignant', function (Blueprint $table) {
            $table->dropForeign('disponibiliteenseignant_ibfk_1');
        });
    }
};
