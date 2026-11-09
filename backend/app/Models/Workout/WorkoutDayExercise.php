<?php

namespace App\Models\Workout;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutDayExercise extends Model
{
    protected $fillable = [
        'workout_day_id',
        'exercise_id',
        'exercise_order',
        'sets_target',
        'reps_target',
        'rest_seconds'
    ];

    public  function day(): BelongsTo
    {
        return $this->belongsTo(WorkoutDay::class);
    }

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    public function sets(): HasMany
    {
        return $this->hasMany(WorkoutSet::class);
    }
}
