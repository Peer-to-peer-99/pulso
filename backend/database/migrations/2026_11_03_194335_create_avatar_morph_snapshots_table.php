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
        Schema::create('avatar_morph_snapshots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('measurement_id')->constrained('body_measurements');
            $table->string('model_version');
            $table->string('algorithm_version');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar_morph_snapshots');
    }
};
