<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->integer('prod_price');
            $table->string('prod_img');
            $table->string('prod_warranty');// Bảo hành
            $table->string('prod_accessories'); // Phụ Kiện
            $table->string('prod_condition'); // Tình trạng
            $table->string('prod_promotion'); // Khuyến mãi
            $table->tinyInteger('prod_status');
            $table->text('prod_description');
            $table->tinyInteger('prod_featured'); // Sản phẩm đặc biệt
            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vp_products');
    }
}
