<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAmbiente', 50);
            $table->string('descripcionAmbiente', 100);
            $table->string('ubicacionAmbiente', 100);
            $table->integer('capacidadAmbiente');
            $table->boolean('activo');
            $table->boolean('inhabilitado');
            $table->foreignId('tipoAmbiente_id')->constrained('tipo_ambientes');
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
        Schema::dropIfExists('ambientes');
    }
}
