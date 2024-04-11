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
        Schema::table('Cours', function (Blueprint $table) {
            $table->foreign(['idEnseignant'], 'cours_ibfk_1')->references(['idEnseignant'])->on('Enseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Cours', function (Blueprint $table) {
            $table->dropForeign('cours_ibfk_1');
        });
    }
};
