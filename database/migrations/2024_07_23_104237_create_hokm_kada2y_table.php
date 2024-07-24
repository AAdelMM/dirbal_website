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
        Schema::create('hokm_kada2y', function (Blueprint $table) {
            $table->id();
            $table->integer('month');
            $table->integer('day');
            $table->string('hokm_title');
            $table->text('mogaz');
            $table->text('ka3da');
            $table->string('ka3da_title');
            $table->longText('dibaga');
            $table->string('wak3a_title');
            $table->longText('wak3a_summary');
            $table->longText('reason');
            $table->string('reason_title');
            $table->longText('hokm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hokm_kada2y');
    }
};
