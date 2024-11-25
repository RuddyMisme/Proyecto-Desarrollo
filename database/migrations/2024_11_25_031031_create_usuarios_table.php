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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre', 50);
            $table->string('apellido_p', 50);
            $table->string('apellido_m', 50);
            $table->enum('estado', ['1', '0']);
            $table->string('carnet', 50)->unique();
            $table->enum('expedido', ['BN', 'CH', 'CB', 'LP', 'OR', 'PA', 'PT', 'SC', 'TJ']);
            $table->date('fecha_nac')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->enum('nombre_rol', ['Usuario', 'Expositor']);
            $table->enum('nombre_area', ['Docente', 'Administrativo', 'Externo', 'Estudiante']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
