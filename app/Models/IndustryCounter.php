<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IndustryCounter extends Model
{
      protected $table = 'industries_counters';
    protected $fillable = ['industry_id', 'title', 'number'];

    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }
}
