<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservadors', function (Blueprint $table) {
            $table->id();
            $table->date('fechaReserva');
            $table->string('descripcionReserva');
            $table->boolean('aceptado');
            $table->unsignedBigInteger('ambiente_id');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
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
        Schema::dropIfExists('reservadors');
    }
}
