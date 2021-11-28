<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VpUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_users', function (Blueprint $table){
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('level');
            $table->rememberToken();
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
        $data= [
            [
                'email'=>'ngoclap@gmail.com',
                'password'=>bcrypt('0905774891'),
                'level'=>1
            ],
            [
                'email'=>'them@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>0
            ],
        ];
        DB::table('vp_users')->insert($data);
    }
}
