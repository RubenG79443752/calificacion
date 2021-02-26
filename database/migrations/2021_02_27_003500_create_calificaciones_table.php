<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('parcial_1');
            $table->integer('parcial_2');
            $table->integer('parcial_3');
            $table->integer('practica');
            $table->integer('laboratorio');
            $table->integer('ex_final');
            $table->unsignedBigInteger('programa_id');
            $table->foreign('programa_id')->references('id')->on('programaciones');
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
        Schema::dropIfExists('calificaciones');
    }
}
