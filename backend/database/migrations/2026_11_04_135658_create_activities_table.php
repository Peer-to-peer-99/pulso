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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->string('type');
            $table->string('tracking_mode')->default('manual');
            $table->string('status')->default('completed');
            $table->string('title')->nullable();
            $table->timestamp('started_at');
            $table->timestamp('finished_at')->nullable();
            $table->unsignedInteger('duration_seconds');
            $table->unsignedInteger('moving_time_seconds')->nullable();
            $table->decimal('distance_meters', 12, 2)->nullable();
            $table->unsignedInteger('calories')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('average_speed_mps', 8, 3)->nullable();
            $table->decimal('average_pace_seconds_per_km', 8, 2)->nullable();
            $table->decimal('elevation_gain_meters', 8, 2)->nullable();
            $table->string('visibility')->default('private');
            $table->timestamps();


            $table->index(['user_id', 'started_at']);
            $table->index(['user_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
