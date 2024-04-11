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
        Schema::create('ConsultationCahier', function (Blueprint $table) {
            $table->integer('idConsultation', true);
            $table->integer('idAdmin')->nullable()->index('idAdmin');
            $table->integer('idCahier')->nullable()->index('idCahier');
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
        Schema::dropIfExists('ConsultationCahier');
    }
};
