<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('paciente_id')->unsigned();
            $table->integer('medico_id')->unsigned();
            $table->integer('historia_clinica_id')->unsigned();
            
            $table->date('fecha_programada');
            $table->date('fecha_registro');

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('historia_clinica_id')->references('id')->on('historia_clinica')->onDelete('cascade');
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
        Schema::dropIfExists('citas');
    }
}
