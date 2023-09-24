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
        Schema::table('egresosgeneral', function (Blueprint $table) {
            $table->foreign(['TipoDeGAsto_idTipoDeGAsto'], 'fk_EgresosGeneral_TipoDeGAsto1')->references(['idTipoDeGAsto'])->on('tipodegasto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('egresosgeneral', function (Blueprint $table) {
            $table->dropForeign('fk_EgresosGeneral_TipoDeGAsto1');
        });
    }
};
