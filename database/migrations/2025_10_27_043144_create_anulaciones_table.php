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
        Schema::create('anulaciones', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('factura_id')->index('factura_id');
            $table->dateTime('fecha_anulacion')->nullable();
            $table->string('motivo')->nullable();
            $table->integer('empleado_id')->index('empleado_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anulaciones');
    }
};
