<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->id();
            $table->string('classificacao', 300);
            $table->string('foto', 1000);
            $table->string('nome', 300);
            $table->string('especificacoes', 2500);
            $table->double('preco');
            $table->double('preco_novo');
            $table->string('tempo_de_uso', 300);
            $table->string('danos', 500);
            $table->string('link', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens');
    }
};
