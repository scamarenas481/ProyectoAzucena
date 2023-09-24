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
        Schema::create('predio', function (Blueprint $table) {
            $table->integer('idPredio', true);
            $table->string('numeroLote', 45)->nullable();
            $table->string('calle', 45)->nullable();
            $table->string('tamanoLote', 45)->nullable();
            $table->enum('tipoUso', ['bodega', 'casahabitacion', 'departamentos'])->nullable();
            $table->integer('propietario_idPropietario')->index('fk_predio_propietario1_idx');

            $table->primary(['idPredio', 'propietario_idPropietario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predio');
    }
};
