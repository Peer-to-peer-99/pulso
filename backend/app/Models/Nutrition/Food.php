<?php

namespace App\Models\Nutrition;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'serving_size',
        'serving_unit',
        'calories',
        'carbohydrates',
        'fats',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
