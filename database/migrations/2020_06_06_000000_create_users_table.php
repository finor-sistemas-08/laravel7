<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade');

            $table->string('usuario')->unique();
            $table->string('password');
            $table->boolean('condicion')->default(1);

            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');

            // $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            // $table->timestamps();
        });
        DB::table('users')->insert(array('id'=>1,'usuario'=>'Eldy23','password'  =>'123456789','condicion'=>1,'rol_id'=>1));
        DB::table('users')->insert(array('id'=>2,'usuario'=>'Arely12','password' =>'123456789','condicion'=>1,'rol_id'=>2));
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
