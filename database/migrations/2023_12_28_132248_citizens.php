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
        Schema::create('citizens', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
                $table->string('CC')->unique();
                $table->string('occupation')->nullable();
                $table->string('description')->nullable();
                $table->timestamp('CC_verified_at')->nullable();
                $table->integer('CC_verified')->default(3);
                $table->integer('address_verified')->default(3);
                $table->timestamp('address_verified_at');
                $table->string('address')->nullable();
                $table->string('localidade')->nullable();
                $table->string('freguesia')->nullable();
                $table->string('cod_postal')->nullable();
                $table->string('telemovel')->nullable();
                $table->integer('gender')->nullable();
                $table->rememberToken();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizens');
    }
};
