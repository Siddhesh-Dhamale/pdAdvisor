<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SolutionResultCard extends Model
{
    protected $fillable = [
        'solution_id',
        'card_image',
        'card_heading',
        'card_description',
    ];

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Solution::class);
    }
}
