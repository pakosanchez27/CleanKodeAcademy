<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido', 100)->nullable()->after('name');
            $table->string('username')->unique()->after('apellido');
            $table->date('fecha_nacimiento')->nullable()->after('username');
            $table->string('fotoPerfil')->nullable()->default('sin_foto')->after('fecha_nacimiento');
            $table->string('genero')->nullable()->after('fotoPerfil');
            $table->text('acerca')->nullable()->after('genero');
            

            // Agregar la columna idRol antes de intentar establecer la clave foránea
            $table->unsignedBigInteger('idRol')->nullable();

            $table->foreign('idRol')->references('idRol')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revertir las acciones en orden inverso al que se crearon
            $table->dropForeign(['idRol']);
            $table->dropColumn('idRol');
            $table->dropColumn('acerca');
            $table->dropColumn('genero');
            $table->dropColumn('fotoPerfil');
            $table->dropColumn('fecha_nacimiento');
            $table->dropColumn('apellido');
            $table->dropColumn('username');
         
        });
    }
};
