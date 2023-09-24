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
        Schema::table('asistencia', function (Blueprint $table) {
            $table->foreign(['Propietario_idPropietario'], 'fk_Asistencia_Propietario1')->references(['idPropietario'])->on('propietario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Asamblea_idAsistenciaAsamblea'], 'fk_Asistencia_Asamblea1')->references(['idAsistenciaAsamblea'])->on('asamblea')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asistencia', function (Blueprint $table) {
            $table->dropForeign('fk_Asistencia_Propietario1');
            $table->dropForeign('fk_Asistencia_Asamblea1');
        });
    }
};
