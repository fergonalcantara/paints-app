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
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('serie', 2);
            $table->integer('correlativo');
            $table->integer('sucursal_id')->index('sucursal_id');
            $table->dateTime('fecha')->nullable()->useCurrent();
            $table->integer('cliente_id')->index('cliente_id');
            $table->integer('empleado_id')->index('empleado_id');
            $table->decimal('total', 12);
            $table->tinyInteger('estado')->default(1)->comment('0=anulada, 1=emitida, 2=pendiente, etc');
            $table->integer('tipo_venta_id')->index('tipo_venta_id');

            $table->unique(['serie', 'correlativo'], 'serie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
