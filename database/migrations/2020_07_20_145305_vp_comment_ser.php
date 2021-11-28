<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpCommentSer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_commentSer', function (Blueprint $table) {
            $table->increments('com_id');
            $table->string('com_email');
            $table->string('com_name');
            $table->string('com_content');
            $table->integer('com_contentsv')->unsigned();
            $table->foreign('com_contentsv')->references('content_id')->on('vp_contentsv')->onDelete('cascade');
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
        Schema::dropIfExists('vp_commentSer');
    }
}
