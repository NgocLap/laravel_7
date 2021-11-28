<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpContentsv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_contentsv', function (Blueprint $table) {
            $table->increments('content_id');
            $table->string('content_img');
            $table->text('content_description');
            $table->integer('content_cate')->unsigned();
            $table->foreign('content_cate')->references('ser_id')->on('vp_service')->onDelete('cascade');
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
        Schema::dropIfExists('vp_contentsv');
    }
}
