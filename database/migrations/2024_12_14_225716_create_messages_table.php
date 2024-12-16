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
        Schema::create('messages', function (Blueprint $table) {
            $table->uuid('message_id')->primary();
            $table->foreignUuid('sender_id')->constrained('users', 'user_id')->onDelete('cascade'); // Pengirim
            $table->foreignUuid('receiver_id')->constrained('users', 'user_id')->onDelete('cascade'); // Penerima
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
