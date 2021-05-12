<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('basicocorto1')->nullable();
            $table->string('basicocorto2')->nullable();
            $table->string('basicocorto3')->nullable();
            $table->string('basicoaccion1')->nullable();
            $table->string('basicoaccion2')->nullable();
            $table->string('basicoaccion3')->nullable();
            $table->string('calificadocorto1')->nullable();
            $table->string('calificadocorto2')->nullable();
            $table->string('calificadocorto3')->nullable();
            $table->string('calificadoaccion1')->nullable();
            $table->string('calificadoaccion2')->nullable();
            $table->string('calificadoaccion3')->nullable();
            $table->string('experimentadocorto1')->nullable();
            $table->string('experimentadocorto2')->nullable();
            $table->string('experimentadocorto3')->nullable();
            $table->string('experimentadoaccion1')->nullable();
            $table->string('experimentadoaccion2')->nullable();
            $table->string('experimentadoaccion3')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('competencias');
    }
}
