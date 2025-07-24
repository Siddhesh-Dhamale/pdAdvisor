<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSection extends Model
{
    use HasFactory;

    protected $table = 'home_blog_sections';

    protected $fillable = [
        'heading',
        'subheading',
    ];
}
