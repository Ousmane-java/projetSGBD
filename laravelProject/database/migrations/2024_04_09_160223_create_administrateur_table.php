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
        Schema::create('administrateur', function (Blueprint $table) {
            $table->integer('idAdmin', true);
            $table->string('nom', 100)->nullable();
            $table->string('prenom', 100)->nullable();
            $table->string('role', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('motDePasse', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateur');
    }
};
