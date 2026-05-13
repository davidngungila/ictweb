<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('package_orders', function (Blueprint $table) {
            if (!Schema::hasColumn('package_orders', 'company_name')) {
                $table->string('company_name')->nullable()->after('client_phone');
            }
            if (!Schema::hasColumn('package_orders', 'selected_addons')) {
                $table->json('selected_addons')->nullable()->after('selected_features');
            }
            if (!Schema::hasColumn('package_orders', 'payment_reference')) {
                $table->string('payment_reference')->nullable()->after('status');
            }
            if (!Schema::hasColumn('package_orders', 'payment_token')) {
                $table->string('payment_token')->nullable()->after('payment_reference');
            }
            if (!Schema::hasColumn('package_orders', 'payment_status')) {
                $table->string('payment_status')->nullable()->after('payment_token');
            }
            if (!Schema::hasColumn('package_orders', 'failure_reason')) {
                $table->text('failure_reason')->nullable()->after('payment_status');
            }
        });

        Schema::table('invoices', function (Blueprint $table) {
            if (!Schema::hasColumn('invoices', 'order_id')) {
                $table->foreignId('order_id')->nullable()->after('demo_request_id')->constrained('package_orders')->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            if (Schema::hasColumn('invoices', 'order_id')) {
                $table->dropConstrainedForeignId('order_id');
            }
        });

        Schema::table('package_orders', function (Blueprint $table) {
            $columns = ['company_name', 'selected_addons', 'payment_reference', 'payment_token', 'payment_status', 'failure_reason'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('package_orders', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
