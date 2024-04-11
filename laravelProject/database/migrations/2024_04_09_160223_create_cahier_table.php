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
        Schema::create('cahier', function (Blueprint $table) {
            $table->integer('idCahier', true);
            $table->integer('idEtudiant')->nullable()->index('idetudiant');
            $table->text('contenu')->nullable();
            $table->date('date')->nullable();
            $table->integer('heure')->nullable();
            $table->integer('idEnseignant')->nullable()->index('idenseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cahier');
    }
};
