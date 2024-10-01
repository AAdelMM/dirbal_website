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
        Schema::create('mashro3_a7kam', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->unsignedTinyInteger('month');
            $table->unsignedTinyInteger('day');
            $table->integer('topic_no');
            $table->string('topic_letter', 10);
            $table->string('author', 100);
            $table->integer('ref_number');
            $table->string('title');
            $table->text('mogaz');
            $table->string('ka3da_title');
            $table->text('ka3da_text');
            $table->text('dibaga');
            $table->text('wak3a_title');
            $table->longText('wak3a_text');
            $table->string('egraa_title');
            $table->longText('egraa_text');
            $table->string('reason_title');
            $table->longText('reason_text');
            $table->string('7okm_title');
            $table->longText('7okm_text');
            $table->json('audio_files')->nullable();
            $table->json('pdf_files')->nullable();
            $table->boolean('updated')->default(false);
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('branch_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mashro3_a7kam');
    }
};
