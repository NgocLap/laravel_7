<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpCommentnews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_comentnews', function (Blueprint $table) {
            $table->increments('com_id');
            $table->string('com_email');
            $table->string('com_name');
            $table->string('com_content');
            $table->integer('com_news')->unsigned();
            $table->foreign('com_news')->references('news_id')->on('vp_news')->onDelete('cascade');
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
        Schema::dropIfExists('vp_comentnews');
    }
}
