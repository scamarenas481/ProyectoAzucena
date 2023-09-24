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
        Schema::create('coperacionproyecto', function (Blueprint $table) {
            $table->integer('idCoperacionProyecto');
            $table->decimal('Costo', 10, 0)->nullable();
            $table->date('Fecha')->nullable();
            $table->string('NumerodeRecibo', 45)->nullable();
            $table->integer('Propietario_idPropietario')->index('fk_Coperacion_Propietario1_idx');
            $table->integer('Proyecto_idProyecto')->index('fk_Coperacion_Proyecto1_idx');

            $table->primary(['idCoperacionProyecto', 'Propietario_idPropietario', 'Proyecto_idProyecto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coperacionproyecto');
    }
};
