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

        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('documento')->nullable();
            $table->text('observacao')->nullable();
            $table->boolean('ativo');
            $table->string('telefone');
            $table->boolean('proprietario')->default(true);
            $table->boolean('morador');
            $table->foreignId('unidade_id')->constrained(table:'unidades');;
            $table->foreignId('tag_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
