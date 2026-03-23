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
        Schema::table('fia_payment_confirmations', function (Blueprint $table) {
            $table->string('payment_method')->nullable();
            $table->string('impe_years')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('mobile_account_name')->nullable();
            $table->string('bank_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fia_payment_confirmations', function (Blueprint $table) {
            $table->dropColumn(['payment_method', 'impe_years', 'mobile_number', 'mobile_account_name', 'bank_name']);
        });
    }
};
