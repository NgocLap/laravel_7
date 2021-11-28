<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpCommentPRdiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_commentPRdiscount', function (Blueprint $table) {
            $table->increments('comdiscount_id');
            $table->string('comdiscount_email');
            $table->string('comdiscount_name');
            $table->string('comdiscount_content');
            $table->integer('comdiscount_product')->unsigned();
            $table->foreign('comdiscount_product')->references('discount_id')->on('vp_productdiscount')->onDelete('cascade');
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
        Schema::dropIfExists('vp_commentPRdiscount');
    }
}
