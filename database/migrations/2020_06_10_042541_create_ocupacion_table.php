<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcupacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocupacion', function (Blueprint $table) {
            $table->increments('id');
            
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');

            $table->integer('cama_id')->unsigned();
            $table->foreign('cama_id')->references('id')->on('camas')->onDelete('cascade');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            
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
        Schema::dropIfExists('ocupacion');
    }
}
