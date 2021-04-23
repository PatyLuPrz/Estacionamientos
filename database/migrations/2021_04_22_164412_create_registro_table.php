<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id('id_registro');
            $table->string('fechaentrada');
            $table->string('fechasalida');
            $table->string('tiempo');
            $table->string('placas');
            $table->string('dejoLLave');
            $table->string('cancelado');
            $table->string('salida');
            $table->string('hrsCobradas');
            $table->string('perdioTicket');
            $table->string('sinronizado');
            $table->string('pagado');
            $table->string('totalPagado');
            $table->string('iva');
            $table->string('noNoches');
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
        Schema::dropIfExists('registro');
    }
}
