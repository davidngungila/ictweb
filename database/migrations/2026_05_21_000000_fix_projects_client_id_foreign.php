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
            // Drop foreign key if it exists
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $fks = array_map(function($fk) { return $fk->getName(); }, $sm->listTableForeignKeys('projects'));
            
            if (in_array('projects_client_id_foreign', $fks)) {
                $table->dropForeign('projects_client_id_foreign');
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
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $fks = array_map(function($fk) { return $fk->getName(); }, $sm->listTableForeignKeys('projects'));
            
            if (in_array('projects_client_id_foreign', $fks)) {
                $table->dropForeign('projects_client_id_foreign');
            }
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
