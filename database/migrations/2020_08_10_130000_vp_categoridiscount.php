<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpCategoridiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_categoridiscount', function (Blueprint $table) {
            $table->increments('catediscount_id');
            $table->string('catediscount_name');
            $table->string('catediscount_slug');
            $table->integer('catediscount_menu')->unsigned()->nullable();
            $table->foreign('catediscount_menu')->references('menu_id')->on('vp_menu')->onDelete('cascade');
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
        Schema::dropIfExists('vp_categoridiscount');
    }
}
