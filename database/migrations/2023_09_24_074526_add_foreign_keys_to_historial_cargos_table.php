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
        Schema::table('historial_cargos', function (Blueprint $table) {
            $table->foreign(['propietario_idPropietario'], 'fk_historial_cargos_propietario1')->references(['idPropietario'])->on('propietario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['periodo_idPeriodo'], 'fk_historial_cargos_periodo1')->references(['idPeriodo'])->on('periodo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['rol_idRol'], 'fk_historial_cargos_rol1')->references(['idRol'])->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial_cargos', function (Blueprint $table) {
            $table->dropForeign('fk_historial_cargos_propietario1');
            $table->dropForeign('fk_historial_cargos_periodo1');
            $table->dropForeign('fk_historial_cargos_rol1');
        });
    }
};
