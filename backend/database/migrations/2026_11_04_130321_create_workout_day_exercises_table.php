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
        Schema::create('workout_day_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_day_id')->constrained('workout_days');
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->unsignedInteger('exercise_order');
            $table->unsignedTinyInteger('sets_target');
            $table->string('reps_target');
            $table->unsignedInteger('rest_seconds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_day_exercises');
    }
};
