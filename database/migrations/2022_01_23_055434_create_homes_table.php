<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->string('home_1_title');
            $table->string('home_1_text');
            $table->string('home_1_img');
            $table->string('home_2_title');
            $table->string('home_2_text');
            $table->string('home_2_img');
            $table->string('home_3_title');
            $table->string('home_3_text');
            $table->string('home_3_img');
            $table->string('slider_home_1_active');
            $table->string('slider_home_1_video');
            $table->string('slider_home_1_image');
            $table->string('slider_home_2_video');
            $table->string('slider_home_2_image');
            $table->string('slider_home_3_video');
            $table->string('slider_home_3_image');
            $table->string('home_5_title');
            $table->string('home_5_text');
            $table->string('home_4_title');
            $table->string('home_4_text');
            $table->string('home_4_img');
            $table->string('slider_home_2_active');
            $table->string('slider_home_4_video');
            $table->string('slider_home_4_image');
            $table->string('slider_home_5_video');
            $table->string('slider_home_5_image');
            $table->string('slider_home_6_video');
            $table->string('slider_home_6_image');
            $table->string('counter_number_1');
            $table->string('counter_number_2');
            $table->string('counter_number_3');
            $table->string('counter_text_1');
            $table->string('counter_text_2');
            $table->string('counter_text_3');
            $table->string('counter_description');
            $table->string('slider_home_3_active');
            $table->string('slider_home_7_video');
            $table->string('slider_home_7_image');
            $table->string('slider_home_8_video');
            $table->string('slider_home_8_image');
            $table->string('slider_home_9_video');
            $table->string('slider_home_9_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
    }
}
