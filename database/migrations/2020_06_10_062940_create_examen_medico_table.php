<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_medico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo',50);
            $table->string('resultado',200);
            
            $table->integer('cita_id')->unsigned();
            $table->foreign('cita_id')->references('id')->on('citas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('examen_medico');
    }
}
