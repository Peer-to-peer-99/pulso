<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'tracking_mode',
        'status',
        'title',
        'started_at',
        'finished_at',
        'duration_seconds',
        'moving_time_seconds',
        'distance_meters',
        'calories',
        'notes',
        'average_speed_mps',
        'average_pace_seconds_per_km',
        'elevation_gain_meters',
        'visibility',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function metrics(): HasMany
    {
        return $this->hasMany(ActivityMetric::class);
    }
}
