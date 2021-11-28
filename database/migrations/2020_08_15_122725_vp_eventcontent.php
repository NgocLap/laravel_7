<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpEventcontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_eventcontent', function (Blueprint $table) {
            $table->increments('evcontent_id');
            $table->string('evcontent_name');
            $table->string('evcontent_slug');
            $table->string('evcontent_img');
            $table->string('evcontent_warranty');// Bảo hành
            $table->string('evcontent_accessories'); // Phụ Kiện
            $table->string('evcontent_condition'); // Tình trạng
            $table->string('evcontent_promotion'); // Khuyến mãi
            $table->tinyInteger('evcontent_status');
            $table->text('evcontent_description');
	        $table->string('evcontent_author');
            $table->integer('evcontent_price');
            $table->integer('evcontent_event')->unsigned();
            $table->foreign('evcontent_event')->references('event_id')->on('vp_event')->onDelete('cascade');
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
        Schema::dropIfExists('vp_eventcontent');
    }
}
