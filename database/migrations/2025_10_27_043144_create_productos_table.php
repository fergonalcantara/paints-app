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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 100);
            $table->string('descripcion');
            $table->integer('marca_id')->index('marca_id');
            $table->decimal('precio_venta', 10);
            $table->decimal('porc_descuento', 5)->nullable()->default(0);
            $table->integer('categoria_id')->index('categoria_id');
            $table->boolean('activo')->nullable()->default(true);
            $table->string('tipo_unidad', 20)->comment('Ej: unidad, galón, cubeta, medio, cuarto');
            $table->decimal('tamano_valor', 10, 3)->nullable()->comment('Ej: 1.000 galón, 0.5 galón');
            $table->decimal('factor_conversion', 10, 4)->nullable()->comment('Respecto a unidad base');
            $table->integer('tiempo_duracion_anios')->nullable();
            $table->decimal('extension_m2', 10)->nullable();
            $table->integer('color_id')->nullable()->index('color_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
