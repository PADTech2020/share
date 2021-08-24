<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ProjectsCreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('image', 255);
            $table->string('summary', 255)->nullable();
            $table->text('content', 255)->nullable();
            $table->string('company', 120)->nullable();
            $table->string('company_link', 120)->nullable();
            $table->string('company_logo', 120)->nullable();
            $table->string('category_id', 11);
            $table->string('gallery_id', 11)->nullable();
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
        Schema::dropIfExists('projects');
    }
}
