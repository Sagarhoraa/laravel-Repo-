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
        Schema::table('child', function (Blueprint $table) {
            // Modify the 'status' column to allow 'pending', 'approved', 'rejected'
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child', function (Blueprint $table) {
            // Revert back to the old state (if needed)
            $table->string('status')->default('false')->change();
        });
    }
};
