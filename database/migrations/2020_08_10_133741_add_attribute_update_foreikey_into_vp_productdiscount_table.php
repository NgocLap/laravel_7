<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeUpdateForeikeyIntoVpProductdiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vp_productdiscount', function (Blueprint $table) {
            $table->integer('discount_cate')->unsigned()->nullable();
            $table->foreign('discount_cate')->references('catediscount_id')->on('vp_categoridiscount')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vp_productdiscount', function (Blueprint $table) {
            //
        });
    }
}
