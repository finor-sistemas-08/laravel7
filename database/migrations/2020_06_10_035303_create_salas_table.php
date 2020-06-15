<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);

            $table->integer('hospital_id')->unsigned();
            $table->foreign('hospital_id')->references('id')->on('hospitales')->onDelete('cascade');
            $table->timestamps();

             DB::table('salas')->insert(array('id'=>1,'nombre'=>'emergencia','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>2,'nombre'=>'maternidad','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>3,'nombre'=>'pediatría','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>4,'nombre'=>'psiquiatría','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>5,'nombre'=>'geriatría','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>6,'nombre'=>'oncología','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>7,'nombre'=>'laboratorio','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>8,'nombre'=>'servico de desintoxicación','hospital_id'=>1));
             DB::table('salas')->insert(array('id'=>9,'nombre'=>'espera','hospital_id'=>1));
        });
    }


    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
