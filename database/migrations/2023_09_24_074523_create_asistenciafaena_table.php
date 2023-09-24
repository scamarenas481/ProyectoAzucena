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
        Schema::create('asistenciafaena', function (Blueprint $table) {
            $table->integer('idAsistenciaFaena');
            $table->char('AsistenciaFaenacol', 1)->nullable();
            $table->integer('Propietario_idPropietario')->index('fk_AsistenciaFaena_Propietario1_idx');
            $table->integer('Faena_idFaena')->index('fk_AsistenciaFaena_Faena1_idx');

            $table->primary(['idAsistenciaFaena', 'Propietario_idPropietario', 'Faena_idFaena']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciafaena');
    }
};
