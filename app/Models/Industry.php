<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Industry extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'hero_heading',
        'hero_description',
        'hero_image',
        'subhero_heading',
        'subhero_description1',
        'subhero_description2',
        'subhero_description3',
        'subhero_description4',
        'solution_cards_heading',
        'counter_heading',
        'result_cards_heading',
        'cta_image',
        'cta_title'
    ];

    public function industryCards(): HasMany
    {
        return $this->hasMany(IndustryCard::class);
    }

    public function industryCounters(): HasMany
    {
        return $this->hasMany(IndustryCounter::class);
    }

    public function industryResultCards(): HasMany
    {
        return $this->hasMany(IndustryResultCard::class);
    }

    public function parent()
    {
        return $this->belongsTo(Industry::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Industry::class, 'parent_id');
    }

    public function related()
    {
        return $this->belongsToMany(
            Industry::class,
            'industry_related',
            'industry_id',
            'related_industry_id'
        );
    }
    public function relatedTo()
    {
        return $this->belongsToMany(
            Industry::class,
            'industry_related',
            'related_industry_id',
            'industry_id'
        );
    }



}
?>