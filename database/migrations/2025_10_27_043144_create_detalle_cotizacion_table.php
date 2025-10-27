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
        Schema::create('detalle_cotizacion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cotizacion_id')->index('cotizacion_id');
            $table->integer('producto_id')->index('producto_id');
            $table->decimal('cantidad', 10, 3);
            $table->decimal('precio_unitario', 10);
            $table->decimal('porc_descuento', 5)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_cotizacion');
    }
};
