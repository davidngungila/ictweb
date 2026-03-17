<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id')->unique();
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 15, 2);
            $table->enum('type', ['personal', 'business', 'agricultural', 'emergency'])->default('personal');
            $table->integer('term'); // in months
            $table->decimal('interest_rate', 5, 2)->default(15.0);
            $table->enum('status', ['pending', 'approved', 'disbursed', 'completed', 'overdue', 'rejected'])->default('pending');
            $table->text('purpose')->nullable();
            $table->date('application_date');
            $table->date('approval_date')->nullable();
            $table->date('disbursement_date')->nullable();
            $table->date('due_date')->nullable();
            $table->text('collateral')->nullable();
            $table->timestamps();
            
            $table->index(['status', 'type']);
            $table->index('application_date');
            $table->index('disbursement_date');
            $table->index('due_date');
        });

        Schema::create('loan_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 15, 2);
            $table->enum('payment_type', ['principal', 'interest', 'penalty'])->default('principal');
            $table->date('payment_date');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index(['loan_id', 'payment_date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_payments');
        Schema::dropIfExists('loans');
    }
};
