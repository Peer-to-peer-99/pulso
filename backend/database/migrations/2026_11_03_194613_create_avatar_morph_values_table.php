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
        Schema::create('avatar_morph_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('snapshot_id')->constrained('avatar_morph_snapshots');
            $table->string('morph_key');
            $table->decimal('influence', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar_morph_values');
    }
};
