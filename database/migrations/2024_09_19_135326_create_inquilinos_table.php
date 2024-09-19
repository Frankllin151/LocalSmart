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
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('imovel_id')->constrained('imoveis')->onDelete('cascade');
            $table->date('data_inicio_contrato')->nullable();
            $table->date('data_fim_contrato')->nullable();
            $table->string('status');
            $table->string('pagamento_recente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquilinos');
    }
};