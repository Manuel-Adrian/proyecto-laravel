<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100)->default('Warrios');
            $table->string('apellido_paterno',100)->default('Labs');
            $table->string('apellido_materno',100)->default(NULL)->nullable();
            $table->smallInteger('edad')->default(NULL)->nullable();
            $table->string('email',150)->unique();
            $table->string('telefono',20)->default(0);
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
        Schema::dropIfExists('estudiantes');
    }
}
