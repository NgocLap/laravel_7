<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeDeleteForeikeyIntoVpProductdiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vp_productdiscount', function (Blueprint $table) {
            $table->dropForeign('vp_productdiscount_discount_cate_foreign');
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
