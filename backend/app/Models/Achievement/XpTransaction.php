<?php

namespace App\Models\Achievement;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class XpTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'source_type',
        'source_id',
        'idempotency_key',
        'amount',
        'description',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
