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
        Schema::create('telefono', function (Blueprint $table) {
            $table->integer('idTelefono');
            $table->string('NumeroTelefono', 45)->nullable();
            $table->integer('Propietario_idPropietario')->index('fk_Telefono_Propietario1_idx');

            $table->primary(['idTelefono', 'Propietario_idPropietario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefono');
    }
};
