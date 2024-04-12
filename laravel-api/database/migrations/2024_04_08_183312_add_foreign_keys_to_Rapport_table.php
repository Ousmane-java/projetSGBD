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
        Schema::table('Rapport', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'rapport_ibfk_1')->references(['idAdmin'])->on('Administrateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Rapport', function (Blueprint $table) {
            $table->dropForeign('rapport_ibfk_1');
        });
    }
};
