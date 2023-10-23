<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedBigInteger('idRol')->index()->primary();
            $table->string('nomRol', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
