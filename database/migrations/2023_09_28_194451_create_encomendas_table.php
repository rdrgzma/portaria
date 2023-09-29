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
        Schema::disableForeignKeyConstraints();

        Schema::create('encomendas', function (Blueprint $table) {
            $table->id();
            $table->string('entregador');
            $table->string('identificacao');
            $table->string('transportadora');
            $table->dateTime('data');
            $table->string('volumes');
            $table->enum('status',['na portaria', 'entregue', 'devolvido', 'recusado'])->comment('na portaria, entregue, devolvido, recusado');
            $table->foreignId('pessoa_id')->constrained(table: 'pessoas');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encomendas');
    }
};
