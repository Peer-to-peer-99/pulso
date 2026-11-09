<?php

namespace App\Models\Body;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BodyMeasurementValue extends Model
{
    protected $fillable = [
        'measurement_id',
        'metric',
        'side',
        'value_cm',
    ];

    public function measurement(): BelongsTo
    {
        return $this->belongsTo(BodyMeasurement::class);
    }
}
