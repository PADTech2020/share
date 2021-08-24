<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TeamCreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('position', 120);
            
            $table->text('summary')->nullable();
            $table->string('image', 255);
            $table->string('phone', 120)->nullable();
            $table->string('email', 120);
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('instagram', 255)->nullable();
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
        Schema::dropIfExists('teams');
    }
}
