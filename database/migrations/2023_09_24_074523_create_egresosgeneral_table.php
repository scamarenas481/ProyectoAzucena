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
        Schema::create('egresosgeneral', function (Blueprint $table) {
            $table->integer('idEgresos');
            $table->string('Egresoscol', 45)->nullable();
            $table->date('FechaEgreso')->nullable();
            $table->string('FolioReciboFactura', 10)->nullable();
            $table->integer('TipoDeGAsto_idTipoDeGAsto')->index('fk_EgresosGeneral_TipoDeGAsto1_idx');

            $table->primary(['idEgresos', 'TipoDeGAsto_idTipoDeGAsto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresosgeneral');
    }
};
