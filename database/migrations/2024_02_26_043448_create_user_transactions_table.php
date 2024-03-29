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
        Schema::create('user_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->required();
            $table->string('transaction_type')->required();
            $table->decimal('amount', 8, 2)->required();
            $table->timestamp('transaction_date')->required();
            $table->enum('transaction_status', ['in_process', 'completed', 'cancelled'])->default('in_process');
            $table->text('description')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_transactions');
    }
};