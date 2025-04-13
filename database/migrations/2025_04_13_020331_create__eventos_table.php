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
        Schema::create('_eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre', 50)->unique();
            $table->text('Descripcion')->nullable();
            $table->dataTime('Fecha_Inicio')->nullable();
            $table->dateTime('Fecha_Fin')->nullable();
            $table->string('Ubicacion', 100)->nullable();
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
