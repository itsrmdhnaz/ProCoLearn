<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignUuid('owner_id')->constrained('users', 'user_id')->onDelete('cascade')->after('project_id');
            $table->foreignUuid('approved_by')->nullable()->constrained('users', 'user_id')->after('owner_id');
            $table->string('name');
            $table->text('description');
            $table->json('roles');
            $table->string('resources');
            $table->string('image');
            $table->enum('status', ['not_started', 'on_progress', 'on_revision', 'cancelled', 'finished']);

            $table->dropColumn(['created_at', 'updated_at']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Drop foreign keys first
            $table->dropForeign(['owner_id']);
            $table->dropForeign(['approved_by']);

            // Drop columns
            $table->dropColumn([
                'owner_id',
                'approved_by',
                'name',
                'description',
                'roles',
                'resources',
                'image',
                'status',
            ]);
        });
    }
};
