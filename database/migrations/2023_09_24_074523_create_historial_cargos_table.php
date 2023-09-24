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
        Schema::create('historial_cargos', function (Blueprint $table) {
            $table->integer('idHistorialCargos', true);
            $table->integer('periodo_idPeriodo')->index('fk_historial_cargos_periodo1_idx');
            $table->integer('propietario_idPropietario')->index('fk_historial_cargos_propietario1_idx');
            $table->integer('rol_idRol')->index('fk_historial_cargos_rol1_idx');

            $table->primary(['idHistorialCargos', 'periodo_idPeriodo', 'propietario_idPropietario', 'rol_idRol']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_cargos');
    }
};
