<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpIntroduce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_introduce', function (Blueprint $table) {
            $table->increments('intro_id');
            $table->string('intro_name');
            $table->string('intro_slug');
            $table->integer('intro_menu')->unsigned()->nullable();
            $table->foreign('intro_menu')->references('menu_id')->on('vp_menu')->onDelete('cascade');
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
        Schema::dropIfExists('vp_introduce');
    }
}
