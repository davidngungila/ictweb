<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Check if the foreign key exists and drop it
            // We'll use a try-catch or check if it's there
            try {
                $table->dropForeign(['client_id']);
            } catch (\Exception $e) {
                // Ignore if it doesn't exist
            }
            
            // Re-add the foreign key pointing to clients table
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            try {
                $table->dropForeign(['client_id']);
            } catch (\Exception $e) {
            }
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
