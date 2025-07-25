<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'about_us_experience_section';

    protected $fillable = [
        'number',
        'heading',
        'description_1',
        'description_2',
        'image_url',
    ];
}
