<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('category_langs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('title');
            $table->timestamps();

            $table->unique(['language_id', 'category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_langs');
    }
};
