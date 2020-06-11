<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',50);
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('correo',100)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('nacionalidad',50)->nullable();
            $table->date('fecha_nacimiento');
            $table->boolean('estado')->default(1);

            

            $table->integer('direccion_id')->unsigned();
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('personas')->insert(array('id'=>1,
                                            'ci'=>'9876190',
                                            'nombre'=>'Eldy',
                                            'apellidos'=>'Maldonado Cuellar',
                                            'correo'=>'eldymacu23@gmail.com',
                                            'telefono'=>'78164811',
                                            'nacionalidad'=>'boliviano',
                                            'fecha_nacimiento'=>'2000/04/23',
                                            'estado'=>1,
                                            'direccion_id'=>1));

        DB::table('personas')->insert(array('id'=>1,
                                            'ci'=>'8861190',
                                            'nombre'=>'Franz Arturo',
                                            'apellidos'=>'Montoya Claudio',
                                            'correo'=>'arturofranz@gmail.com',
                                            'telefono'=>'78188771',
                                            'nacionalidad'=>'boliviano',
                                            'fecha_nacimiento'=>'1995/04/23',
                                            'estado'=>1,
                                            'direccion_id'=>2));
        
        
    }
    
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
