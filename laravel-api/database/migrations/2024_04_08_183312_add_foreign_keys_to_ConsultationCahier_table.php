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
        Schema::table('ConsultationCahier', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'consultationcahier_ibfk_1')->references(['idAdmin'])->on('Administrateur');
            $table->foreign(['idCahier'], 'consultationcahier_ibfk_2')->references(['idCahier'])->on('Cahier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ConsultationCahier', function (Blueprint $table) {
            $table->dropForeign('consultationcahier_ibfk_1');
            $table->dropForeign('consultationcahier_ibfk_2');
        });
    }
};
