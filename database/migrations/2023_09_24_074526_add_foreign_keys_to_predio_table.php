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
        Schema::table('predio', function (Blueprint $table) {
            $table->foreign(['propietario_idPropietario'], 'fk_predio_propietario1')->references(['idPropietario'])->on('propietario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predio', function (Blueprint $table) {
            $table->dropForeign('fk_predio_propietario1');
        });
    }
};