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
        Schema::create('achievement_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('achievement_id')->constrained('achievements');
            $table->decimal('current_value', 12, 2)->default(0);
            $table->decimal('target_value', 12, 2);
            $table->timestamp('last_evaluated_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'achievement_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_progress');
    }
};
