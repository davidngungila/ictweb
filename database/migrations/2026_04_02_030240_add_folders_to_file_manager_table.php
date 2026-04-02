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
        Schema::table('file_managers', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable()->after('id');
            $table->string('folder_path')->nullable()->after('category');
            $table->boolean('is_folder')->default(false)->after('folder_path');
            
            $table->foreign('parent_id')->references('id')->on('file_managers')->onDelete('cascade');
            $table->index(['parent_id', 'is_folder']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('file_managers', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropIndex(['parent_id', 'is_folder']);
            $table->dropColumn(['parent_id', 'folder_path', 'is_folder']);
        });
    }
};
