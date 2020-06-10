<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->string('descripcion',100)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });

        DB::table('roles')->insert(array('id'=>'1','nombre'=>'Administrador','descripcion'=>'administradores de sistema'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'Medico'       ,'descripcion'=>'medico especialista'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'Paciente'     ,'descripcion'=>'paciente internado'));
        DB::table('roles')->insert(array('id'=>'4','nombre'=>'Invitado'     ,'descripcion'=>'persona invitada'));
    }


    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
