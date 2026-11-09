<?php

namespace App\Models\Activity\Route;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityRoutePoint extends Model
{
    protected $fillable = [
        'activity_route_id',
        'latitude',
        'longitude',
        'altitude_meters',
        'recorded_at',
        'speed_mps',
        'heart_rate',
    ];

    public function route(): BelongsTo
    {
        return $this->belongsTo(ActivityRoute::class);
    }
}
