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
        Schema::table('quotes', function (Blueprint $table) {
            $table->string('title')->after('id'); // إضافة عمود عنوان القبسة
            $table->string('category')->nullable()->after('source'); // إضافة عمود تصنيف القبسة//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn('title'); // إزالة عمود عنوان القبسة
            $table->dropColumn('category'); // إزالة عمود تصنيف القبسة//
        });
    }
};
