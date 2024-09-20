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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->text('descricao');
            $table->string('localizacao');
            $table->string('proximidade')->nullable();
            $table->string('transporte_publico')->nullable();
            $table->string('quartos')->nullable();
            $table->string('banheiros')->nullable();
            $table->string('numero_ap')->nullable();
            $table->string('status')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imoveis');
    }
};