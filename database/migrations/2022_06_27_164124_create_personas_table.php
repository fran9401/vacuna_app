<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',64);
            $table->string('apellido',64);
            $table->date('fecha_nacimiento');
            $table->string('cedula',16);
            $table->string('Barrio',32);
            $table->string('ciudad',32);
            $table->string('pais',32);
            $table->string('sexo',1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
