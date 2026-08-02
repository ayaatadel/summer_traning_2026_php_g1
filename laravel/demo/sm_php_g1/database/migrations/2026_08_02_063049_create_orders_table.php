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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // user_id ===> users ====> my_users
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->onUpdate('cascade');

            // $table->foreignId('user_id')->constrained('my_users')->onDelete('cascade');
            
            // === $table->unsignedBigInteger('user_id');
            // === $table->foreign('user_id')->references('id')->on('my_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
