<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SolutionCounter extends Model
{
    protected $fillable = [
        'solution_id',
        'number',
        'title',
    ];

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Solution::class);
    }
}
