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
        Schema::create('calculadoras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('estado');
            $table->date('fecha_adquisicion');
            $table->foreignId('modelo_id')->constrained('modelos_calculadoras');
            $table->foreignId('sede_id')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculadoras');
    }
};
