<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpContentintro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_contentintro', function (Blueprint $table) {
            $table->increments('contentintro_id');
            $table->string('contentintro_img');
            $table->text('contentintro_description');
            $table->integer('contentintro_intro')->unsigned();
            $table->foreign('contentintro_intro')->references('intro_id')->on('vp_introduce')->onDelete('cascade');
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
        Schema::dropIfExists('vp_contentintro');
    }
}
