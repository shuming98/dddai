<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *      
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
                $table->increments('pid');
                $table->integer('uid')->default(0);
                $table->string('name',10)->default('');
                $table->integer('money');
                $table->string('mobile',11);
                $table->string('title',50)->default('');
                $table->tinyinteger('rate')->default(0);
                $table->tinyinteger('hrange')->default(0);
                $table->tinyinteger('status')->default(0); 
                $table->integer('recive')->default(0);
                $table->integer('pubtime');
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
