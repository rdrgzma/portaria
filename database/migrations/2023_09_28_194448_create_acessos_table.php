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

        Schema::create('acessos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_entrada');
            $table->enum('status',['liberado', 'recusado', 'falha'])->comment('liberado, recusado, falha');
            $table->dateTime('data_saida')->nullable();
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
        Schema::dropIfExists('acessos');
    }
};
