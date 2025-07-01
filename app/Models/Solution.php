<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solution extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'hero_heading',
        'hero_description',
        'hero_image',
        'subhero_heading',
        'subhero_description',
        'solution_cards_heading',
        'counter_heading',
        'result_cards_heading',
        'cta_image',
        'cta_title',
    ];

    public function solutionCards(): HasMany
    {
        return $this->hasMany(SolutionCard::class);
    }

    public function solutionCounters(): HasMany
    {
        return $this->hasMany(SolutionCounter::class);
    }

    public function solutionResultCards(): HasMany
    {
        return $this->hasMany(SolutionResultCard::class);
    }
}
