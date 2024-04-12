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
        Schema::create('Cahier', function (Blueprint $table) {
            $table->integer('idCahier', true);
            $table->text('contenu')->nullable();
            $table->date('date')->nullable();
            $table->integer('heure')->nullable();
            $table->integer('cours')->nullable();
            $table->integer('nom')->nullable()->index('id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cahier');
    }
};
