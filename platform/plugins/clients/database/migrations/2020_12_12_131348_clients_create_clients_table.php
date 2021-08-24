<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ClientsCreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('company', 120);
            $table->string('company_link', 255);
            $table->string('company_logo', 255)->nullable();
            $table->text('content', 255)->nullable();
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
        Schema::dropIfExists('clients');
    }
}
