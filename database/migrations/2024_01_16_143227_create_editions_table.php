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
            $table->smallInteger('status')->default(1)->comment("1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado");
            $table->string('identifier');
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
