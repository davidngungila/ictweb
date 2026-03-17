<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->unique();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->enum('member_type', ['individual', 'business', 'group'])->default('individual');
            $table->enum('status', ['active', 'inactive', 'pending', 'suspended'])->default('active');
            $table->date('registration_date');
            $table->timestamps();
            
            $table->index(['status', 'member_type']);
            $table->index('registration_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};
