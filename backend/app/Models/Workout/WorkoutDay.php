<?php

namespace App\Models\Workout;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutDay extends Model
{
    protected $fillable = [
        'workout_plan_id',
        'name',
        'description',
        'day_order',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(WorkoutPlan::class);
    }

}
