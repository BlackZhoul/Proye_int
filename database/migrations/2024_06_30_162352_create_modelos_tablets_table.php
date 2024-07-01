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
        Schema::create('modelos_tablets', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('nombre');
            $table->string('memoria_ram');
            $table->string('memoria_interna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos_tablets');
    }
};
