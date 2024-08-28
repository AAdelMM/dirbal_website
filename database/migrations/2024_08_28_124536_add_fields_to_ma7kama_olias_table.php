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
        Schema::table('ma7kama_olia', function (Blueprint $table) {
             // Split "رقم الموضوع" into numeric and alphabetic parts
             $table->integer('topic_number_numeric')->nullable();
             $table->string('topic_number_alpha')->nullable();
 
             // Add day column below month
             $table->integer('day')->nullable();
 
             // Add fields for MP3 and PDF files
             $table->string('mp3_file')->nullable();
             $table->string('pdf_file')->nullable();
 
             // Add checkbox or boolean field to mark as updated
             $table->boolean('is_updated')->default(false); //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ma7kama_olia', function (Blueprint $table) {
            $table->dropColumn('topic_number_numeric');
            $table->dropColumn('topic_number_alpha');
            $table->dropColumn('day');
            $table->dropColumn('mp3_file');
            $table->dropColumn('pdf_file');
            $table->dropColumn('is_updated'); //
        });
    }
};
