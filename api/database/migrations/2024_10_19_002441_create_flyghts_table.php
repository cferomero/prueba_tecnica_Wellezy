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
        Schema::create('flyghts', function (Blueprint $table) {
            $table->id();
            $table->string('aerolineaName');
            $table->string('ciudadSalida');
            $table->string('ciudadDestino');
            $table->string('fechaVuelo');
            $table->string('ciudad');
            $table->string('aeropuerto');
            $table->string('duracion');
            $table->string('horaSalida');
            $table->string('horaLlegada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flyghts');
    }
};
