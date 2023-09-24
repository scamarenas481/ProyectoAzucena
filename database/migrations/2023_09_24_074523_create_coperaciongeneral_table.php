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
        Schema::create('coperaciongeneral', function (Blueprint $table) {
            $table->integer('idCoperacionGeneral');
            $table->string('FechaInicio', 45)->nullable();
            $table->string('Cantidad', 45)->nullable();
            $table->integer('Propietario_idPropietario')->index('fk_CoperacionGeneral_Propietario1_idx');

            $table->primary(['idCoperacionGeneral', 'Propietario_idPropietario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coperaciongeneral');
    }
};
