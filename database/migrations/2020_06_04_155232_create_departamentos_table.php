<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->timestamps();
        });

        DB::table('departamentos')->insert(array('id'=>1,'nombre'=>'Santa Cruz'));
        // DB::table('departamentos')->insert(array('id'=>2,'nombre'=>'La Paz'));
        // DB::table('departamentos')->insert(array('id'=>3,'nombre'=>'Cochabamba'));
        // DB::table('departamentos')->insert(array('id'=>4,'nombre'=>'Sucre'));
        // DB::table('departamentos')->insert(array('id'=>5,'nombre'=>'Oruro'));
        // DB::table('departamentos')->insert(array('id'=>6,'nombre'=>'Potosi'));
        // DB::table('departamentos')->insert(array('id'=>7,'nombre'=>'Beni'));
        // DB::table('departamentos')->insert(array('id'=>8,'nombre'=>'Tarija'));
        // DB::table('departamentos')->insert(array('id'=>9,'nombre'=>'Pando'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
