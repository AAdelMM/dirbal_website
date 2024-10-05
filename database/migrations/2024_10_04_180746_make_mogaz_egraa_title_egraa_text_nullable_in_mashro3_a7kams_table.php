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
            $table->text('mogaz')->nullable()->change();
            $table->string('egraa_title')->nullable()->change();
            $table->text('egraa_text')->nullable()->change(); //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mashro3_a7kam', function (Blueprint $table) {
            $table->text('mogaz')->nullable(false)->change();
            $table->string('egraa_title')->nullable(false)->change();
            $table->text('egraa_text')->nullable(false)->change();//
        });
    }
};
