<?php

namespace App\Models\Achievement;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code',
        'icon',
        'category',
        'criteria',
        'points',
        'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_achievements')->withPivot('unlocked_at')->withTimestamps();
    }
}
