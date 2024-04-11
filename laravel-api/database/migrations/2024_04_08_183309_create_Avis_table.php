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
        Schema::create('Avis', function (Blueprint $table) {
            $table->integer('idAvis', true);
            $table->integer('idEtudiant')->nullable()->index('idEtudiant');
            $table->integer('idCours')->nullable()->index('idCours');
            $table->text('commentaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Avis');
    }
};
