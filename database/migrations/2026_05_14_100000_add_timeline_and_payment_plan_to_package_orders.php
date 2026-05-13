<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('package_orders', function (Blueprint $table) {
            if (! Schema::hasColumn('package_orders', 'payment_plan')) {
                $table->string('payment_plan', 40)->nullable()->after('notes');
            }
            if (! Schema::hasColumn('package_orders', 'timeline_priority')) {
                $table->string('timeline_priority', 40)->nullable()->after('payment_plan');
            }
        });
    }

    public function down(): void
    {
        Schema::table('package_orders', function (Blueprint $table) {
            if (Schema::hasColumn('package_orders', 'timeline_priority')) {
                $table->dropColumn('timeline_priority');
            }
            if (Schema::hasColumn('package_orders', 'payment_plan')) {
                $table->dropColumn('payment_plan');
            }
        });
    }
};
