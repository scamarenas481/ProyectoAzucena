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
        Schema::create('asistencia', function (Blueprint $table) {
            $table->integer('idAsistencia');
            $table->char('Asistencia', 1)->nullable();
            $table->integer('Asamblea_idAsistenciaAsamblea')->index('fk_Asistencia_Asamblea1_idx');
            $table->integer('Propietario_idPropietario')->index('fk_Asistencia_Propietario1_idx');

            $table->primary(['idAsistencia', 'Asamblea_idAsistenciaAsamblea', 'Propietario_idPropietario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
};
