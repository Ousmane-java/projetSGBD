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
        Schema::create('note', function (Blueprint $table) {
            $table->integer('idNote', true);
            $table->integer('idEtudiant')->nullable()->index('idetudiant');
            $table->integer('idEnseignant')->nullable()->index('idenseignant');
            $table->float('noteDS', null, 0)->nullable();
            $table->date('dateDS')->nullable();
            $table->text('evaluation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note');
    }
};
