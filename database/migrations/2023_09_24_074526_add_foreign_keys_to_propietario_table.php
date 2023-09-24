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
        Schema::table('propietario', function (Blueprint $table) {
            $table->foreign(['rol_idRol'], 'fk_propietario_rol1')->references(['idRol'])->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propietario', function (Blueprint $table) {
            $table->dropForeign('fk_propietario_rol1');
        });
    }
};
