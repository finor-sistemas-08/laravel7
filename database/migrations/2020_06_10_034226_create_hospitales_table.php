<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHospitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('nivel',50);
            $table->string('telefono',20)->nullable();
            $table->string('email',100)->nullable();

            $table->integer('direccion_id')->unsigned();
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('hospitales')->insert(array('id'=>1,'nombre'=>'CAJA DE SALUD CORDES','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>2,'nombre'=>'CAJA DE SALUD DE LA BANCA PRIVADA – POLICONSULTORIO 1','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>3,'nombre'=>'CAJA DE SALUD DE LA BANCA PRIVADA – POLICONSULTORIO 2','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>4,'nombre'=>'CAJA DE SALUD DE LA BANCA PRIVADA – POLICONSULTORIO 3','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>5,'nombre'=>'CAJA PETROLERA DE SALUD – ADMINISTRACIÓN DEPARTAMENTAL SANTA CRUZ','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>6,'nombre'=>'CAJA PETROLERA DE SALUD – ADMINISTRACIÓN REGIONAL CAMIRI','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>7,'nombre'=>'CAJA PETROLERA DE SALUD – HOSPITAL GUARACACHI','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>8,'nombre'=>'CAJA PETROLERA DE SALUD – HOSPITAL SANTA CRUZ','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>9,'nombre'=>'HOSPITAL SELENE MAIANI','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>10,'nombre'=>'HOSPITAL  1º DE MAYO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>11,'nombre'=>'HOSPITAL DE REPOSO Y RECUPERACION','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>12,'nombre'=>'HOSPITAL UNIVERSITARIO JAPONES','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>13,'nombre'=>'HOSPITAL MUNICIPAL DE LA MUJER DR. PERCY BOLAND RODRIGUEZ','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>14,'nombre'=>'HOSPITAL MUNICIPAL DE NIÑOS MARIO ORTIZ SUAREZ','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>15,'nombre'=>'HOSPITAL MUNICIPAL FRANCÉS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>16,'nombre'=>'HOSPITAL MUNICIPAL SAN JUAN DE DIOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>17,'nombre'=>'HOSPITAL UNIVERSITARIO HERNÁNDEZ VERA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>18,'nombre'=>'HOSPITAL UNIVERSITARIO JAPONES','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>19,'nombre'=>'HOSPITAL. SAN JUAN DE DIOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>20,'nombre'=>'HOSPITAL MUNICIPAL. «CAMIRI»','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>21,'nombre'=>'HOSPITAL. SAN JUAN DE DIOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>22,'nombre'=>'HOSPITAL MUNICIPAL. «CAMIRI»','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>23,'nombre'=>'INSTITUTO ONCOLÓGICO DEL ORIENTE BOLIVIANO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>24,'nombre'=>'HOSP. JULIO MANUEL ARAMAYO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>25,'nombre'=>'HOSP MCPAL SEÑOR DE MALTA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>26,'nombre'=>'HOSP. JULIO MANUEL ARAMAYO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>27,'nombre'=>'HOSP MCPAL SEÑOR DE MALTA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>28,'nombre'=>'CENTRO DE SALUD 10 DE OCTUBRE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>29,'nombre'=>'CENTRO DE SALUD 12 DE DICIEMBRE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>30,'nombre'=>'CENTRO DE SALUD 18 DE MARZO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>31,'nombre'=>'CENTRO DE SALUD 25 DE DICIEMBRE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>32,'nombre'=>'CENTRO DE SALUD ANITA LEIGUE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>33,'nombre'=>'CENTRO DE SALUD ANTOFAGASTA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>34,'nombre'=>'CENTRO DE SALUD BOLINTER','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>35,'nombre'=>'CENTRO DE SALUD COPTO ORTODOXO PAPA SHENOUDA TERCERO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>36,'nombre'=>'CENTRO DE SALUD EL PAJONAL','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>37,'nombre'=>'CENTRO DE SALUD ELVIRA WUNDERLICH','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>38,'nombre'=>'CENTRO DE SALUD HAMACAS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>39,'nombre'=>'CENTRO DE SALUD LA COLORADA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>40,'nombre'=>'CENTRO DE SALUD LA SAGRADA FAMILIA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>41,'nombre'=>'CENTRO DE SALUD LAS AMÉRICAS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>42,'nombre'=>'CENTRO DE SALUD LAZARETO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>43,'nombre'=>'CENTRO DE SALUD LOS OLIVOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>44,'nombre'=>'CENTRO DE SALUD MARIA CECILIA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>45,'nombre'=>'CENTRO DE SALUD MI SALUD','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>46,'nombre'=>'CENTRO DE SALUD MONTERO HOYOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>47,'nombre'=>'CENTRO DE SALUD PERPETUO SOCORRO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>48,'nombre'=>'CENTRO DE SALUD POCHOLA TRAPERO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>49,'nombre'=>'CENTRO DE SALUD PREVENTIVA SUD','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>50,'nombre'=>'CENTRO DE SALUD ROQUE AGUILERA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>51,'nombre'=>'CENTRO DE SALUD SAN AGUSTÍN','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>52,'nombre'=>'CENTRO DE SALUD SAN ANTONIO','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>53,'nombre'=>'CENTRO DE SALUD SAN CARLOS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>54,'nombre'=>'CENTRO DE SALUD SAN LUIS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>55,'nombre'=>'CENTRO DE SALUD SANTA ISABEL','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>56,'nombre'=>'CENTRO DE SALUD SANTA ROSITA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>57,'nombre'=>'CENTRO DE SALUD SANTE SUD','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>58,'nombre'=>'CENTRO DE SALUD TIERRAS NUEVAS','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>59,'nombre'=>'CENTRO DE SALUD UNIVERSITARIO NORTE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>60,'nombre'=>'CENTRO DE SALUD VIDA Y ESPERANZA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>61,'nombre'=>'CENTRO DE SALUD VÍRGEN DE COTOCA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>62,'nombre'=>'CENTRO DE SALUD VIRGEN DE FÁTIMA','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
        DB::table('hospitales')->insert(array('id'=>63,'nombre'=>'CENTRO DE SALUD WILLE LEMAITRE','nivel'=>'2','telefono'=>'','email'=>'','direccion_id','1'));
    }

    public function down()
    {
        Schema::dropIfExists('hospitales');
    }
}
// Url de hospitales
// http://doctorbolivia.com/hospitales-y-centros-de-salud-santa-cruz/