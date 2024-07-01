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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_prestamo');
            $table->datetime('fecha_devolucion_prevista');
            $table->datetime('fecha_devolucion_real')->nullable();
            $table->string('estado');
            $table->string('modalidad');
            $table->unsignedBigInteger('material_id');
            $table->string('material_tipo');
            $table->foreignId('user_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
