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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['contents_id']);//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            Schema::table('comments', function (Blueprint $table) {
                // In case you want to restore the foreign key, you can add it back in the down method
                // $table->foreign('contents_id')->references('id')->on('contents');
            }); //
        });
    }
};
