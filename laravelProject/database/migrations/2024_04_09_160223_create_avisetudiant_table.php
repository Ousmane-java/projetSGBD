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
        Schema::create('avisetudiant', function (Blueprint $table) {
            $table->integer('idAvisEtudiant', true);
            $table->integer('idEtudiant')->nullable()->index('idetudiant');
            $table->integer('idCours')->nullable()->index('idcours');
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
        Schema::dropIfExists('avisetudiant');
    }
};
