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
        Schema::create('novedad_camaras', function (Blueprint $table) {
            $table->id()->autoincremet();
            $table->string('interno');
            $table->string('conductor');
            $table->date('fecha_novedad');
            $table->string('actividad');
            $table->string('observaciones')->nullable();
            $table->string('tipo');
            $table->string('detalle_actividad')->nullable();
            $table->string('responsable_actividad')->nullable();
            $table->string('responsable_tarea')->nullable();
            $table->Date('fecha_realizado')->nullable();
            $table->string('circuito')->nullable();
            $table->string('memoria')->nullable();
            $table->string('camara')->nullable();
            $table->string('cable')->nullable();
            $table->string('estado');
            $table->string('soportes')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novedad_camaras');
    }
};
