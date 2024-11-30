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
        Schema::table('mashro3_a7kam', function (Blueprint $table) {
            $table->string('subtitle')->nullable(); // Short text//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mashro3_a7kam', function (Blueprint $table) {
            $table->dropColumn('subtitle');//
        });
    }
};
