<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nivel')->nullable();
            $table->unsignedInteger('competencias_id'); 
            $table->foreign('competencias_id')->references('id')->on('competencias');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nivels');
    }
}
