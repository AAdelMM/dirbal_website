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
        Schema::create('ma7kama_olia', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('month');
            $table->integer('ref_number');
            $table->string('title');
            $table->text('mogaz');
            $table->string('ka3da_title');
            $table->longText('ka3da_text');
            $table->text('dibaga');
            $table->string('waka3_title');
            $table->longText('waka3_text');
            $table->string('egraa_title');
            $table->longText('egraa_text');
            $table->string('reason_title');
            $table->longText('reason_text');
            $table->string('hokm_title');
            $table->longText('hokm_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ma7kama_olia');
    }
};
