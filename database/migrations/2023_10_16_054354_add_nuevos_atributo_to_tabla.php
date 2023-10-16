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
            $table->date('fecha_nacimiento')->nullable()->after('apellido');
            $table->string('fotoPerfil')->nullable()->default('sin_foto')->after('fecha_nacimiento');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apellido');
            $table->dropColumn('fecha_nacimiento');
            $table->dropColumn('fotoPerfil');
        });
    }
};

