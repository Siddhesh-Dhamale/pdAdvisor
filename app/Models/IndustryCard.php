<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IndustryCard extends Model
{
    protected $table = 'industries_cards';
    protected $fillable = ['industry_id', 'card_heading', 'card_description'];

    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }
}
