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
        Schema::create('CamarasTask', function (Blueprint $table) {

            $table->id()->autoincremet();
            $table->string('document');
            $table->string('name_conductor');
            $table->date('fecha_ingreso');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('user_conductor');
            $table->string('password_condutor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
