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
        Schema::create('Cours', function (Blueprint $table) {
            $table->integer('idCours')->primary();
            $table->string('nomCours')->nullable();
            $table->string('horaire', 50)->nullable();
            $table->integer('idEnseignant')->nullable()->index('idEnseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cours');
    }
};