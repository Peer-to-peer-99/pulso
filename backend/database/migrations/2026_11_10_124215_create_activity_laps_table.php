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
        Schema::create('activity_laps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('activities');
            $table->unsignedInteger('lap_number');
            $table->decimal('distance_meters', 12, 2);
            $table->unsignedInteger('duration_seconds');
            $table->decimal('average_pace_seconds_per_km', 8, 2)->nullable();
            $table->decimal('average_speed_mps', 8, 3)->nullable();
            $table->timestamps();
            $table->unique(['activity_id', 'lap_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_laps');
    }
};
