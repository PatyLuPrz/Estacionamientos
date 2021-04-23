<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCorteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cortes', function (Blueprint $table) {
            $table->id('id_detalle_corte');
            $table->unsignedBigInteger('id_corte');
            $table->unsignedBigInteger('id_registro');
            $table->foreign('id_corte')->references('id_corte')->on('cortes');
            $table->foreign('id_registro')->references('id_registro')->on('registros');
            $table->string('numreg');
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
        Schema::dropIfExists('detalle_corte');
    }
}
