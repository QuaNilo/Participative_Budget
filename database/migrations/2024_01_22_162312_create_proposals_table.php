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
            $table->text('title');
            $table->text('content');
            $table->text('summary')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->text('street')->nullable();
            $table->text('postal_code')->nullable();
            $table->text('city')->nullable();
            $table->text('freguesia')->nullable();
            $table->text('url')->nullable();
            $table->boolean('winner')->nullable();
            $table->integer('rank')->nullable();
            $table->smallInteger('status')->default(1)->comment("1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado");
            $table->float('budget_estimate')->nullable();
            $table->integer('unique_impressions')->default(0);
            $table->integer('impressions')->default(0);
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
