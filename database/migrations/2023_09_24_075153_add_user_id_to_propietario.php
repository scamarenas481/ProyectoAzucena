<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPropietario extends Migration
{
    public function up()
    {
        Schema::table('propietario', function (Blueprint $table) {
            // Agregar una columna user_id que almacenará la clave externa
            $table->unsignedBigInteger('user_id')->nullable();

            // Definir la relación con la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('propietario', function (Blueprint $table) {
            // Deshacer la modificación en caso de rollback
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
