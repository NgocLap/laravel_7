<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_name');
            $table->string('news_slug');
            $table->string('news_author');
            $table->string('news_img');
            $table->date('news_date');
            $table->text('news_description');
            $table->tinyInteger('news_featured'); // Tin Tức đặc biệt
            $table->foreign('news_cate')->references('cate_id')->on('vp_information')->onDelete('cascade');
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
        Schema::dropIfExists('vp_news');
    }
}
