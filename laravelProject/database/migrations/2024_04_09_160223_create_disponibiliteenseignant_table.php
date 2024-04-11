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
        Schema::create('disponibiliteenseignant', function (Blueprint $table) {
            $table->integer('idDisponibilite', true);
            $table->integer('idEnseignant')->nullable()->index('idenseignant');
            $table->date('dateDisponibilite')->nullable();
            $table->time('heureDebut')->nullable();
            $table->time('heureFin')->nullable();
            $table->boolean('disponible')->nullable();
            $table->text('motifAnnulation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponibiliteenseignant');
    }
};
