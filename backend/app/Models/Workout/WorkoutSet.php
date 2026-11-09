<?php

namespace App\Models\Workout;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutSet extends Model
{
    protected $fillable = [
        'workout_session_id',
        'exercise_id',
        'set_number',
        'repetitions',
        'weight_kg',
        'completed'
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(WorkoutSession::class);
    }
}
