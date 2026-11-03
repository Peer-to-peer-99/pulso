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
        Schema::create('body_measurement_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('measurement_id')->constrained('body_measurements');
            $table->string('metric');
            $table->string('side');
            $table->decimal('value_cm', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_measurement_values');
    }
};
