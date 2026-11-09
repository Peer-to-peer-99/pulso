<?php

namespace App\Models\Workout;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutSession extends Model
{
    protected $fillable = [
        'workout_plan_id',
        'workout_day_id',
        'started_at',
        'finished_at',
        'notes'
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(WorkoutPlan::class);
    }

    public function day(): BelongsTo
    {
        return $this->belongsTo(WorkoutDay::class);
    }
}
