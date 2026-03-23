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
        Schema::create('fia_payment_confirmations', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_name');
            $table->string('member_type');
            $table->string('member_email')->nullable();
            $table->decimal('amount_to_pay', 15, 2);
            $table->text('notes')->nullable();
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->timestamps();
            
            $table->index('member_id');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fia_payment_confirmations');
    }
};
