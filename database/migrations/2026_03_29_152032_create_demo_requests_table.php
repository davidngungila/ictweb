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
        Schema::create('demo_requests', function (Blueprint $table) {
            $table->id();
            $table->string('demo_type');
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('job_title')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->date('preferred_date');
            $table->time('preferred_time');
            $table->string('attendees')->nullable();
            $table->string('language')->nullable();
            $table->text('message')->nullable();
            $table->string('urgency')->default('medium');
            $table->string('status')->default('pending'); // pending, contacted, scheduled, completed, cancelled
            $table->decimal('estimated_value', 10, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_requests');
    }
};
