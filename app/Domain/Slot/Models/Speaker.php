<?php

namespace App\Domain\Slot\Models;

use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function slot(): BelongsTo
    {
        return $this->belongsTo(Slot::class);
    }
}
