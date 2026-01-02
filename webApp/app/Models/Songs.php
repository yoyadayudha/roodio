<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Songs extends Model
{
    public function mood(): BelongsTo
    {
        return $this->belongsTo(Mood::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
