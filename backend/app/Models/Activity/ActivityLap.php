<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class ActivityLap extends Model
{
    protected $fillable = [
        'activity_id',
        'lap_number',
        'distance_meters',
        'duration_seconds',
        'average_pace_seconds_per_km',
        'average_speed_mps'
    ];
}
