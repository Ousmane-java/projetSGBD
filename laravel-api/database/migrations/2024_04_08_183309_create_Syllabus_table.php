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
        Schema::create('Syllabus', function (Blueprint $table) {
            $table->integer('idSyllabus', true);
            $table->text('contenu')->nullable();
            $table->integer('nombreHeures')->nullable();
            $table->text('objectif')->nullable();
            $table->string('titre')->nullable();
            $table->text('evaluation')->nullable();
            $table->date('dateCC')->nullable();
            $table->date('dateDS')->nullable();
            $table->text('resource')->nullable();
            $table->text('politiqueCours')->nullable();
            $table->timestamps();
            $table->integer('idUser')->nullable()->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Syllabus');
    }
};
