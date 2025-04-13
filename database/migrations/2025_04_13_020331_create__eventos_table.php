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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 50)->unique();
            $table->text('Descripcion')->nullable();
            $table->dateTime('Fecha_Inicio')->nullable(); // Corregido
            $table->dateTime('Fecha_Fin')->nullable();    // Corregido
            $table->string('Ubicacion', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_eventos');
    }
};
