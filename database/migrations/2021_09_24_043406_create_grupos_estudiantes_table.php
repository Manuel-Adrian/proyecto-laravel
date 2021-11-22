<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('grupos_id')->foreign()->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
             $table->bigInteger('estudiantes_id');
             $table->foreign('estudiantes_id')->references('id')->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('grupos_estudiantes');
    }
}
