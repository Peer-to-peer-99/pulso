<?php

namespace App\Models\Achievement;

use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
    protected $fillable = [
        'user_id',
        'achievement_id',
        'unlocked_at',
        'notified_at',
    ];
}
