<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $table = 'hero_sections';

    protected $fillable = [
        'page_name',
        'banner_image',
        'icon',
        'icon_text',
        'banner_content',
        'button_text',
        'button_url',
    ];
}
