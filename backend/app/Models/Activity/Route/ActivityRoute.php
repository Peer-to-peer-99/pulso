<?php

namespace App\Models\Activity\Route;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityRoute extends Model
{
    protected $fillable = [
        'activity_id',
        'distance_meters',
        'encoded_polyline',
        'started_at',
        'finished_at',
    ];

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
