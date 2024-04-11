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
        Schema::create('syllabusenseignant', function (Blueprint $table) {
            $table->integer('idSyllabusEnseignant', true);
            $table->integer('idEnseignant')->nullable()->index('idenseignant');
            $table->integer('idCours')->nullable()->index('idcours');
            $table->text('contenu')->nullable();
            $table->date('dateCreation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syllabusenseignant');
    }
};
