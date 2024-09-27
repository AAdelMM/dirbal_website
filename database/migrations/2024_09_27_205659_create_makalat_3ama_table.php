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
        Schema::create('makalat_3ama', function (Blueprint $table) {
            $table->id();
            $table->string('3nwan');
            $table->text('mola5s');
            $table->integer('ref_number');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('author');
            $table->boolean('updated')->default(false);
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('branch_id')->constrained('branches');
            $table->foreignId('item_id')->constrained('items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makalat_3ama');
    }
};
