<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('type', ['workshop', 'seminar', 'training', 'networking'])->default('workshop');
            $table->string('location');
            $table->boolean('is_online')->default(false);
            $table->string('meeting_link')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('max_attendees')->nullable();
            $table->decimal('fee', 10, 2)->default(0);
            $table->enum('status', ['upcoming', 'ongoing', 'completed', 'cancelled'])->default('upcoming');
            $table->string('image')->nullable();
            $table->timestamps();
            
            $table->index(['status', 'type']);
            $table->index('start_date');
        });

        Schema::create('event_attendees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->enum('registration_status', ['registered', 'attended', 'cancelled'])->default('registered');
            $table->dateTime('registration_date');
            $table->decimal('fee_paid', 10, 2)->default(0);
            $table->timestamps();
            
            $table->unique(['event_id', 'member_id']);
            $table->index(['event_id', 'registration_status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_attendees');
        Schema::dropIfExists('events');
    }
};
