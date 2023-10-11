<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('descripcion');
            $table->foreignId('aula_id')->constrained('aulas');
            $table->foreignId('usuario_id')->constrained('usuarios');
            //$table->foreignId('dia_id')->constrained('dias');
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
        Schema::dropIfExists('reservas');
    }
}
