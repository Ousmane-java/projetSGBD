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
        Schema::create('AvisEtudiant', function (Blueprint $table) {
            $table->integer('idAvisEtudiant', true);
            $table->integer('idEtudiant')->nullable()->index('idEtudiant');
            $table->integer('idCours')->nullable()->index('idCours');
            $table->text('commentaire')->nullable();
            $table->date('dateAvis')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AvisEtudiant');
    }
};
