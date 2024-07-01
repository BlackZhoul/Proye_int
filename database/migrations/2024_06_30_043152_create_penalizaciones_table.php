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
        //

        Schema::create('penalizaciones', function (Blueprint $table) {

            $table->id();
            $table->string('tipo');
            $table->string('observacion');
            $table->string('estado')->default('activo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('penalizaciones');
        
    }
};
