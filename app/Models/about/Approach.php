<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    protected $table = 'about_us_approach_section';

    protected $fillable = [
        'title',
        'heading',
        'description',
    ];
}
