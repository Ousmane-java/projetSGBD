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
        Schema::table('consultationcahier', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'consultationcahier_ibfk_1')->references(['idAdmin'])->on('administrateur')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['idCahier'], 'consultationcahier_ibfk_2')->references(['idCahier'])->on('cahier')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultationcahier', function (Blueprint $table) {
            $table->dropForeign('consultationcahier_ibfk_1');
            $table->dropForeign('consultationcahier_ibfk_2');
        });
    }
};
