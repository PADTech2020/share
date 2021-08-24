<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TestimonialCreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 120);
            $table->string('position', 120);
            $table->text('content');
            $table->string('image', 255);
            $table->tinyInteger('status')->unsigned()->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
