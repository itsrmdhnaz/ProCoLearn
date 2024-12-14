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
        Schema::create('message_projects', function (Blueprint $table) {
            $table->uuid('message_project_id')->primary();
            $table->foreignUuid('project_id')->constrained('projects', 'project_id')->onDelete('cascade'); // Proyek terkait
            $table->text('message');
            $table->json('read_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_projects');
    }
};
