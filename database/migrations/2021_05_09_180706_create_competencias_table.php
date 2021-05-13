<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('NombreCompetencia');
            $table->string('Descripcion');
            $table->string('AccionCorta1');
            $table->string('AccionCorta01');
            $table->string('AccionCorta2');
            $table->string('AccionCorta02');
            $table->string('AccionCorta3');
            $table->string('AccionCorta03');
            $table->string('AccionCorta_1');
            $table->string('AccionCorta_01');
            $table->string('AccionCorta_2');
            $table->string('AccionCorta_02');
            $table->string('AccionCorta_3');
            $table->string('AccionCorta_03');
            $table->string('AccionCorta__1');
            $table->string('AccionCorta__01');
            $table->string('AccionCorta__2');
            $table->string('AccionCorta__02');
            $table->string('AccionCorta__3');
            $table->string('AccionCorta__03');
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
        Schema::dropIfExists('competencias');
    }
}
