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
        Schema::table('rapport', function (Blueprint $table) {
            $table->foreign(['idAdmin'], 'rapport_ibfk_1')->references(['idAdmin'])->on('administrateur')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rapport', function (Blueprint $table) {
            $table->dropForeign('rapport_ibfk_1');
        });
    }
};
