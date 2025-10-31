<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Interaction extends Model
{
    /** @use HasFactory<\Database\Factories\InteractionFactory> */
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'type',
        'note',
        'timestamp',
    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
