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
        Schema::create('home_bullet_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->constrained()->cascadeOnDelete();
            $table->string('bullet_point')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_bullet_points');
    }
};
