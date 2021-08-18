<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestosHasCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencium_puesto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competencium_id');
            $table->unsignedBigInteger('puesto_id');
            $table->integer('nivel');
            $table->foreign('competencium_id')->references('id')->on('competencias')->onDelete('cascade');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade');
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
        Schema::dropIfExists('competencium_puesto');
    }
}
