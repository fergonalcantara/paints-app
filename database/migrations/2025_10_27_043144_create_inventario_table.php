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
        Schema::create('inventario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sucursal_id')->index('sucursal_id');
            $table->integer('producto_id')->index('producto_id');
            $table->decimal('existencia', 10, 3)->nullable()->default(0);
            $table->dateTime('fecha_actualizacion')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};
