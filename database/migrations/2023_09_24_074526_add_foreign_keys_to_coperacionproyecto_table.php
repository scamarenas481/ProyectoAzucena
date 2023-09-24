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
        Schema::table('coperacionproyecto', function (Blueprint $table) {
            $table->foreign(['Proyecto_idProyecto'], 'fk_Coperacion_Proyecto1')->references(['idProyecto'])->on('proyecto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Propietario_idPropietario'], 'fk_Coperacion_Propietario1')->references(['idPropietario'])->on('propietario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coperacionproyecto', function (Blueprint $table) {
            $table->dropForeign('fk_Coperacion_Proyecto1');
            $table->dropForeign('fk_Coperacion_Propietario1');
        });
    }
};
