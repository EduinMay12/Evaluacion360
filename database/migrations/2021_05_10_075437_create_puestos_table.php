<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('descripcion', 250);
            $table->string('reporta_a')->nullable();
            $table->timestamps();
<<<<<<< HEAD
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('puesto')->nullable();
            $table->engine = 'InnoDB';
=======
>>>>>>> jose_cocom
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('puestos');
    }
}
