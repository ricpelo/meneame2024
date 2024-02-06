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
        Schema::create('etiqueta_noticia', function (Blueprint $table) {
            $table->foreignId('etiqueta_id')->constrained();
            $table->foreignId('noticia_id')->constrained();
            $table->primary(['etiqueta_id', 'noticia_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_noticia');
    }
};
