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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('usuario_id')->index('usuario_id');
            $table->integer('sucursal_id')->index('sucursal_id');
            $table->string('nombre_completo', 100);
            $table->string('dpi', 25);
            $table->string('nit', 20);
            $table->string('puesto', 50)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->tinyInteger('estado')->default(1)->comment('0=inactivo, 1=activo, 2=suspendido, etc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
