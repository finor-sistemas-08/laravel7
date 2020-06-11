<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle_avenida',200);
            $table->string('numero_domicilio',10);
            $table->string('zona_barrio',100);
            $table->integer('distrito_id')->unsigned();

            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('direcciones')->insert(array(
            'id'=>1,
            'calle_avenida'=>'Bolivar',
            'numero_domicilio'=>'233',
            'zona_barrio'=>'Virgen de cotoca',
            'distrito_id'=>1
        ));
        DB::table('direcciones')->insert(array(
            'id'=>1,
            'calle_avenida'=>'C/5',
            'numero_domicilio'=>'233',
            'zona_barrio'=>'Virgen Urkupiñ',
            'distrito_id'=>1
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
