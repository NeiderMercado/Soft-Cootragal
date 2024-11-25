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

        Schema::create('Recaudo', function (Blueprint $table) 
        {
            $table->id()->autoincrement();
            $table->integer('INTERNO');
            $table->string('PLACA');
            $table->integer('CONSOLIDADO');
            $table->integer('TIM_MONOTARIFA');
            $table->integer('TIM_MULTITARIFA');
            $table->integer('TIM_POR_FUERA');
            $table->integer('VALOR_PASAJE');
            $table->integer('VENTA_TOTAL');
            $table->integer('GASTOS');
            $table->integer('VALOR_CANCELAR');
            $table->date('FECHA_RECAUDO');
            $table->date('FECHA_LIQUIDACION');
            $table->string('LIQUIDADOR');
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
