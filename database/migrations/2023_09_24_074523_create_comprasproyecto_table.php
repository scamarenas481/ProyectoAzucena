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
        Schema::create('comprasproyecto', function (Blueprint $table) {
            $table->integer('idtipoGasto');
            $table->string('ObservacionDelGasto', 60)->nullable();
            $table->date('FechaGasto')->nullable();
            $table->decimal('Cantidad', 10, 0)->nullable();
            $table->integer('Proyecto_idProyecto')->index('fk_Compras_Proyecto1_idx');
            $table->integer('TipoDeGAsto_idTipoDeGAsto')->index('fk_ComprasProyecto_TipoDeGAsto1_idx');

            $table->primary(['idtipoGasto', 'Proyecto_idProyecto', 'TipoDeGAsto_idTipoDeGAsto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprasproyecto');
    }
};
