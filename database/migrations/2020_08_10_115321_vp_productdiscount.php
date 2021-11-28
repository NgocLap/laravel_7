<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpProductdiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_productdiscount', function (Blueprint $table) {
            $table->increments('discount_id');
            $table->string('discount_name');
            $table->string('discount_slug');
            $table->integer('discount_price');
            $table->string('discount_img');
            $table->string('discount_warranty');// Bảo hành
            $table->string('discount_accessories'); // Phụ Kiện
            $table->string('discount_condition'); // Tình trạng
            $table->string('discount_promotion'); // Khuyến mãi
            $table->tinyInteger('discount_status');
            $table->text('discount_description');
            $table->tinyInteger('discount_featured'); // Sản phẩm đặc biệt
            $table->integer('discount_cate')->unsigned();
            $table->foreign('discount_cate')->references('catediscount_id')->on('vp_categoridiscount')->onDelete('cascade');
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
        Schema::dropIfExists('vp_productdiscount');
    }
}
