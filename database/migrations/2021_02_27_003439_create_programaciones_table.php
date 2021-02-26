<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programaciones', function (Blueprint $table) {
            $table->id();
            $table->string('gestion', 7);
            $table->integer('grupo');
            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('asignatura_id')->references('id')->on('estudiantes');
            $table->foreign('estudiante_id')->references('id')->on('asignaturas');
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
        Schema::dropIfExists('programaciones');
    }
}
