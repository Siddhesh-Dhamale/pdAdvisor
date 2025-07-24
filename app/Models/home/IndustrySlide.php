<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrySlide extends Model
{
    use HasFactory;

    protected $table = 'home_industry_slides';

    protected $fillable = [
        'heading',
        'subheading',
        'question',
        'services', 
        'img'
    ];
}
