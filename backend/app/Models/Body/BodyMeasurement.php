<?php

namespace App\Models\Body;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\HttpKernel\Profiler\Profile;

class BodyMeasurement extends Model
{
    protected $fillable = [
        'profile_id',
        'weight_kg',
        'measured_at',
        'notes',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(BodyProfile::class);
    }

    public function values(): HasMany
    {
        return $this->hasMany(BodyMeasurementValue::class, 'measurement_id');
    }
}
