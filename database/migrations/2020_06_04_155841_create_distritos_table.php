<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);

            $table->integer('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('distritos')->insert(array('id'=>1,'nombre'=>'1','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>2,'nombre'=>'2','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>3,'nombre'=>'3','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>4,'nombre'=>'4','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>5,'nombre'=>'5','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>6,'nombre'=>'6','municipio_id'=>1));
        
        DB::table('distritos')->insert(array('id'=>7,'nombre'=>'7','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>8,'nombre'=>'8','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>9,'nombre'=>'9','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>10,'nombre'=>'10','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>11,'nombre'=>'11','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>12,'nombre'=>'12','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>13,'nombre'=>'13','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>14,'nombre'=>'14','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>15,'nombre'=>'15','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>16,'nombre'=>'16','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>17,'nombre'=>'17','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>18,'nombre'=>'18','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>19,'nombre'=>'19','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>20,'nombre'=>'20','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>21,'nombre'=>'21','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>22,'nombre'=>'22','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>23,'nombre'=>'23','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>24,'nombre'=>'24','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>25,'nombre'=>'25','municipio_id'=>1));
        DB::table('distritos')->insert(array('id'=>26,'nombre'=>'26','municipio_id'=>1));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distritos');
    }
}
