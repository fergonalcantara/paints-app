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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('usuario', 50)->unique('usuario');
            $table->string('password_hash');
            $table->string('nombre_completo', 100);
            $table->string('email', 100);
            $table->integer('rol_id')->index('rol_id');
            $table->tinyInteger('estado')->default(1)->comment('0=inactivo, 1=activo, 2=suspendido, etc');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
