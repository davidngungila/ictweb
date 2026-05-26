<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company')->nullable();
            $table->unsignedTinyInteger('service_id')->nullable();
            $table->unsignedTinyInteger('package_id')->nullable();
            $table->string('vertical')->nullable();
            $table->string('service_name')->nullable();
            $table->string('package_name')->nullable();
            $table->json('selected_addons')->nullable();
            $table->string('budget_range')->nullable();
            $table->string('timeline')->nullable();
            $table->text('project_description');
            $table->string('how_heard')->nullable();
            $table->string('status')->default('new');
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
