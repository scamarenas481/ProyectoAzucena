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
        Schema::create('asamblea', function (Blueprint $table) {
            $table->integer('idAsistenciaAsamblea')->primary();
            $table->date('Fecha')->nullable();
            $table->string('Lugar', 45)->nullable();
            $table->string('Hora', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asamblea');
    }
};
