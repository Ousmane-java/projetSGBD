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
        Schema::create('Rapport', function (Blueprint $table) {
            $table->integer('idRapport', true);
            $table->string('typeRapport', 100)->nullable();
            $table->text('contenu')->nullable();
            $table->integer('idAdmin')->nullable()->index('idAdmin');
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
        Schema::dropIfExists('Rapport');
    }
};
