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
        Schema::table('kitab_sawty', function (Blueprint $table) {
            $table->unsignedSmallInteger('topic_no')->nullable(); // 2 or 3 numbers
            $table->string('topic_letter', 3)->nullable(); // 2 or 3 characters
            $table->string('subtitle')->nullable(); // Short text//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kitab_sawty', function (Blueprint $table) {
            $table->dropColumn(['topic_no', 'topic_letter', 'subtitle']);
            //
        });
    }
};
