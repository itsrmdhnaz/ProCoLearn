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
        Schema::create('project_contributtors', function (Blueprint $table) {
            $table->uuid('project_contributtor_id');
            $table->foreignUuid('project_id')->constrained('projects', 'project_id')->onDelete('cascade');
            $table->foreignUuid('user_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('role_id')->constrained('roles', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_contributtors');
    }
};
