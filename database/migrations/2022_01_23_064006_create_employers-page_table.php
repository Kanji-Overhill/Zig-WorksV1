<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers-page', function (Blueprint $table) {
            $table->string('banner_image');
            $table->string('banner_link');
            $table->string('title_1');
            $table->string('title_2');
            $table->string('text_2');
            $table->string('image_2');
            $table->string('title_3');
            $table->string('text_3');
            $table->string('image_3');
            $table->string('title_4');
            $table->string('text_4');
            $table->string('slider_active');
            $table->string('slider_1_video');
            $table->string('slider_1_image');
            $table->string('slider_2_video');
            $table->string('slider_2_image');
            $table->string('slider_3_video');
            $table->string('slider_3_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
