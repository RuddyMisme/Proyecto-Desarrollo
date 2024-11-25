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
        Schema::create('listar_curso', function (Blueprint $table) {
            $table->id('id_listar_curso');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_curso');
            $table->enum('nombre_rol', ['En Curso', 'Terminado']);
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
        Schema::dropIfExists('listar_cursos');
    }
};
