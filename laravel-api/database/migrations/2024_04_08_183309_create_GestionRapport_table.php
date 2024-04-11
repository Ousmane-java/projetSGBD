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
        Schema::create('GestionRapport', function (Blueprint $table) {
            $table->integer('idGestionRapport', true);
            $table->integer('idAdmin')->nullable()->index('idAdmin');
            $table->integer('idRapport')->nullable()->index('idRapport');
            $table->string('action', 50)->nullable();
            $table->date('dateGestion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GestionRapport');
    }
};
