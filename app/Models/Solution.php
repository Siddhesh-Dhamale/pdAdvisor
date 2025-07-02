<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solution extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',  
        'icon',
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
        'cta_button_text',
        'cta_button_url',
    ];

    public function solutionCards()
    {
        return $this->hasMany(SolutionCard::class);
    }

    public function solutionCounters()
    {
        return $this->hasMany(SolutionCounter::class);
    }

    public function solutionResultCards()
    {
        return $this->hasMany(SolutionResultCard::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function solutionServices()
    {
        return $this->hasMany(\App\Models\Service::class, 'solution_id');
        // Assuming 'solution_id' is the foreign key in the services table that links to solutions.id
    }
}
