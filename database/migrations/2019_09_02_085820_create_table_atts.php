<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atts', function (Blueprint $table) {
            $table->increments('aid');
            $table->integer('uid')->default(0);
            $table->integer('pid')->default(0);
            $table->string('title')->default(''); 
            $table->string('realname')->default(''); 
            $table->tinyinteger('age')->default(0); 
            $table->enum('gender',['男','女']); 
            $table->tinyinteger('salary')->default(0); 
            $table->string('jobcity')->default(''); 
            $table->string('udesc')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atts');
    }
}
