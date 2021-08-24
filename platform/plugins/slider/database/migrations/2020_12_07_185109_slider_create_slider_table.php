<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SliderCreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('slug', 120);
            $table->string('image', 255);
            $table->string('main_slide', 255);
            $table->string('content', 255);
            $table->string('button_1', 120);
            $table->string('button_2', 120);
            $table->string('button_1_url', 255);
            $table->string('button_2_url', 255);
            $table->string('status', 60)->default('published');
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
        Schema::dropIfExists('sliders');
    }
}
