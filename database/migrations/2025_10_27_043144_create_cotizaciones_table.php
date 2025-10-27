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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cliente_id')->index('cliente_id');
            $table->integer('empleado_id')->index('empleado_id');
            $table->integer('sucursal_id')->index('sucursal_id');
            $table->dateTime('fecha')->nullable()->useCurrent();
            $table->string('estado', 20)->nullable()->default('pendiente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizaciones');
    }
};
