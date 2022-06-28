<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_vacuna', function (Blueprint $table) {
            $table->id();
            $table->string('dosis');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_vacuna');
            $table->date('fecha');
            $table->string('laboratorio');
            $table->string('lote');





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
        Schema::dropIfExists('persona_vacuna');
    }
};
