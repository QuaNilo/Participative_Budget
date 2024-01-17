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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('edition_id')->constrained()->cascadeOnDelete();
            $table->foreignId('edition_winner_id')->nullable()->constrained()->cascadeOnDelete();
            $table->text('content');
            $table->double('coordinateX');
            $table->double('coordinateY');
            $table->text('summary');
            $table->text('title');
            $table->binary('image')->nullable();
            $table->smallInteger('status')->default(1)->comment("1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado");
            $table->float('budget_estimate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
