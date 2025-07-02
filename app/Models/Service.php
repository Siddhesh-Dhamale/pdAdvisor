<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
protected $fillable = [
    'solution_id',
    'service_heading',
    'service_url',
];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
}
