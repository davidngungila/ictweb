<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('savings_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->string('account_number')->unique();
            $table->enum('type', ['regular', 'fixed', 'children', 'group'])->default('regular');
            $table->decimal('balance', 15, 2)->default(0);
            $table->decimal('interest_rate', 5, 2)->default(8.5);
            $table->enum('status', ['active', 'dormant', 'closed', 'frozen'])->default('active');
            $table->date('opening_date');
            $table->timestamp('last_activity')->nullable();
            $table->date('maturity_date')->nullable(); // for fixed deposits
            $table->timestamps();
            
            $table->index(['status', 'type']);
            $table->index('opening_date');
            $table->index('last_activity');
        });

        Schema::create('savings_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('savings_account_id')->constrained()->onDelete('cascade');
            $table->enum('transaction_type', ['deposit', 'withdrawal', 'interest', 'penalty']);
            $table->decimal('amount', 15, 2);
            $table->decimal('balance_before', 15, 2);
            $table->decimal('balance_after', 15, 2);
            $table->text('description')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
            
            $table->index(['savings_account_id', 'transaction_type']);
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('savings_transactions');
        Schema::dropIfExists('savings_accounts');
    }
};
