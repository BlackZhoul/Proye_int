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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('isbn')->unique('id');
            $table->date('anio_publicacion');
            $table->string('descripcion');
            $table->string('idioma');
            $table->unsignedInteger('nro_paginas');
            $table->string('dewey');
            $table->string('descriptores');

            $table->foreignId('editorial_id')->constrained('editoriales');
            $table->foreignId('departamento_id')->constrained();
            $table->foreignId('autor_id')->constrained('autores');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
