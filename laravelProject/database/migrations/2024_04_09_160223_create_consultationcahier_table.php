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
        Schema::create('consultationcahier', function (Blueprint $table) {
            $table->integer('idConsultation', true);
            $table->integer('idAdmin')->nullable()->index('idadmin');
            $table->integer('idCahier')->nullable()->index('idcahier');
            $table->date('dateConsultation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultationcahier');
    }
};
