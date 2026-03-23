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
        Schema::create('fia_payment_records', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->decimal('gawio_la_fia', 15, 2)->default(0);
            $table->decimal('fia_iliyokomaa', 15, 2)->default(0);
            $table->decimal('jumla', 15, 2)->default(0);
            $table->decimal('malipo_vya_vipande', 15, 2)->nullable();
            $table->string('loan')->nullable();
            $table->decimal('kiasi_baki', 15, 2)->default(0);
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('fia_payment_records');
    }
};
