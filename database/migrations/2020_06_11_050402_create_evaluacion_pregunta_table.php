<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionPreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_pregunta', function (Blueprint $table) {
            $table->id();

            $table->boolean('respuesta');
            $table->integer('nota_parcial');

            $table->integer('evaluacion_id')->unsigned();
            $table->foreign('evaluacion_id')->references('id')->on('evaluaciones')->onDelete('cascade');
            
            $table->integer('pregunta_id')->unsigned();
            $table->foreign('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');
            
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
        Schema::dropIfExists('evaluacion_pregunta');
    }
}
