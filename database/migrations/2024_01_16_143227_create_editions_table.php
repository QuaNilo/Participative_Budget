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
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('edition_end')->nullable();
            $table->date('edition_publish')->nullable();
            $table->smallInteger('status')->default(0)->comment("0 - Pendente | 1 - Aberta | 2 - Analise | 3 - Votação | 4 - Completado | 5 - Fechado | 6 - Cancelado");
            $table->string('identifier')->unique();
            $table->integer('edition_number')->nullable()->unique();
            $table->string('title')->nullable()->unique();
            $table->string('description')->nullable()->unique();
            $table->integer('ano')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
