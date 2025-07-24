<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $table = 'home_counters';

    protected $fillable = [
        'heading',
        'count',
        'count_title',
        'symbol',
    ];
}
