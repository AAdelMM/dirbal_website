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
        Schema::create('audio_books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('mogaz');
            $table->string('mokadma_title');
            $table->longText('mokadma_text');
            $table->longText('article_text');
            $table->string('file_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio_books');
    }
};
