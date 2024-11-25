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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_curso');
            $table->decimal('monto', 10, 2);
            $table->date('fecha_pago');
            $table->enum('metodo_pago', ['Efectivo', 'Tarjeta', 'Transferencia']);
            $table->enum('estado_pago', ['Pendiente', 'Pagado', 'Cancelado']);
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
