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
        Schema::create('productos_proveedores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('producto_id')->index('producto_id');
            $table->integer('proveedor_id')->index('proveedor_id');
            $table->dateTime('fecha_solicitud')->nullable()->useCurrent();
            $table->integer('cantidad_solicitada')->nullable()->default(0);
            $table->tinyInteger('estado')->default(1)->comment('0=recibido, 1=pendiente, 2=suspendido, etc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_proveedores');
    }
};
