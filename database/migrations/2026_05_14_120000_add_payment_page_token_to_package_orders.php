<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('package_orders', function (Blueprint $table) {
            if (! Schema::hasColumn('package_orders', 'payment_page_token')) {
                $table->string('payment_page_token', 40)->nullable()->unique()->after('order_number');
            }
        });

        if (Schema::hasColumn('package_orders', 'payment_page_token')) {
            DB::table('package_orders')->whereNull('payment_page_token')->orderBy('id')->chunkById(100, function ($rows): void {
                foreach ($rows as $row) {
                    DB::table('package_orders')->where('id', $row->id)->update([
                        'payment_page_token' => self::makeUniqueToken(),
                    ]);
                }
            });
        }
    }

    public static function makeUniqueToken(): string
    {
        for ($i = 0; $i < 20; $i++) {
            $token = bin2hex(random_bytes(16));
            if (! DB::table('package_orders')->where('payment_page_token', $token)->exists()) {
                return $token;
            }
        }

        return bin2hex(random_bytes(16));
    }

    public function down(): void
    {
        Schema::table('package_orders', function (Blueprint $table) {
            if (Schema::hasColumn('package_orders', 'payment_page_token')) {
                $table->dropUnique(['payment_page_token']);
                $table->dropColumn('payment_page_token');
            }
        });
    }
};
