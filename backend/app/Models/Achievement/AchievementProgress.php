<?php

namespace App\Models\Achievement;

use Illuminate\Database\Eloquent\Model;

class AchievementProgress extends Model
{
    protected $fillable = [
        'user_id',
        'achievement_id',
        'current_value',
        'target_value',
        'last_evaluated_at'
    ];
}
