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
        Schema::create('propietario', function (Blueprint $table) {
            $table->integer('idPropietario');
            $table->string('AP', 25)->nullable();
            $table->string('AM', 25)->nullable();
            $table->string('Nombre', 25)->nullable();
            $table->enum('Rol', ['presidente', 'secretario', 'tesorero'])->nullable();
            $table->integer('rol_idRol')->index('fk_propietario_rol1_idx');

            $table->primary(['idPropietario', 'rol_idRol']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietario');
    }
};
