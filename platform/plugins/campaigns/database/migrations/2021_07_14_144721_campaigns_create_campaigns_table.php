<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CampaignsCreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('slug', 120);

            $table->string('image', 255);
            $table->string('summary', 255)->nullable();
            $table->text('content', 255)->nullable();
            $table->string('donation_total', 20)->nullable();
            $table->string('donation_goal', 20)->nullable();
            $table->string('seo_title', 180)->nullable();
            $table->text('seo_description')->nullable();


//            $table->increments('id');
//            $table->string('name', 120);
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
        Schema::dropIfExists('campaigns');
    }
}
