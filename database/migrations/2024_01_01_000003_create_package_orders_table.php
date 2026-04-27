<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('package_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->foreignId('service_id')->nullable();
            $table->foreignId('package_id')->nullable();
            $table->json('selected_features');
            $table->decimal('total_price', 10, 2);
            $table->decimal('advance_payment', 10, 2);
            $table->decimal('remaining_balance', 10, 2);
            $table->string('status')->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_orders');
    }
};
