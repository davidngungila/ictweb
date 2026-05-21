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
        Schema::table('projects', function (Blueprint $table) {
            // Handle 'title' column (renaming from 'name' if necessary)
            if (Schema::hasColumn('projects', 'name') && !Schema::hasColumn('projects', 'title')) {
                $table->renameColumn('name', 'title');
            } elseif (!Schema::hasColumn('projects', 'title')) {
                $table->string('title')->after('id')->nullable();
            }

            // Handle 'project_number' column
            if (!Schema::hasColumn('projects', 'project_number')) {
                $table->string('project_number')->unique()->after('id')->nullable();
            }

            // Handle 'status' column - ensure it exists before we try to use it in 'after'
            if (!Schema::hasColumn('projects', 'status')) {
                $table->string('status')->default('pending');
            }

            // Handle 'service_type' column
            if (!Schema::hasColumn('projects', 'service_type')) {
                $table->string('service_type')->nullable();
            }

            // Handle 'progress_percentage' column
            if (!Schema::hasColumn('projects', 'progress_percentage')) {
                $table->integer('progress_percentage')->default(0);
            }

            // Clean up old columns if they exist and are not in the new model
            if (Schema::hasColumn('projects', 'service_id')) {
                $table->unsignedBigInteger('service_id')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Revert changes if needed
        });
    }
};
