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
        Schema::table('comprasproyecto', function (Blueprint $table) {
            $table->foreign(['Proyecto_idProyecto'], 'fk_Compras_Proyecto1')->references(['idProyecto'])->on('proyecto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['TipoDeGAsto_idTipoDeGAsto'], 'fk_ComprasProyecto_TipoDeGAsto1')->references(['idTipoDeGAsto'])->on('tipodegasto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comprasproyecto', function (Blueprint $table) {
            $table->dropForeign('fk_Compras_Proyecto1');
            $table->dropForeign('fk_ComprasProyecto_TipoDeGAsto1');
        });
    }
};
