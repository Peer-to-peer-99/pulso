<?php

namespace App\Models\Body;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BodyPhoto extends Model
{
    protected $fillable = [
        'profile_id',
        'file_path',
        'taken_at',
        'notes',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(BodyProfile::class);
    }
}
