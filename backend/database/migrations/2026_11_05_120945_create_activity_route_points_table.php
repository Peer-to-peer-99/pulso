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
        Schema::create('activity_route_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_route_id')->constrained('activity_routes');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->decimal('altitude_meters', 8, 2)->nullable();
            $table->timestamp('recorded_at');
            $table->decimal('speed_mps', 7, 3)->nullable();
            $table->unsignedSmallInteger('heart_rate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_route_points');
    }
};
