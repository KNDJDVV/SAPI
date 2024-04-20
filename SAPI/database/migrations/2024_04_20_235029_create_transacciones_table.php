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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propiedad_id');
            $table->unsignedBigInteger('cliente_id');
            $table->string('tipo_transaccion');
            $table->date('fecha_transaccion');
            $table->decimal('monto_transaccion');
            $table->timestamps();

            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
