<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogoHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_horarios', function (Blueprint $table) {
            /*
            $table->id();
            $table->string('nombre', 50);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('descripcion', 100)->nullable();
            $table->timestamps();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
