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
        Schema::create('kitab_sawty', function (Blueprint $table) {
            $table->id();
            $table->string('3nwan'); // Short text for title
            $table->text('mola5s'); // Medium text for summary
            $table->integer('ref_number'); // Reference number
            $table->longText('text'); // Large text for the content
            $table->string('audio_file')->nullable(); // For MP3 uploads
            $table->string('image')->nullable(); // For image uploads
            $table->string('video_url')->nullable(); // For video URLs
            $table->string('author'); // Short text for author
            $table->string('editor'); // Short text for editor
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('branch_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->nullable()->constrained()->onDelete('cascade'); // Nullable item_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitab_sawty');
    }
};
