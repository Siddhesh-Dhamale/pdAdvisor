<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class Values extends Model
{
    protected $table = 'about_us_values_section';

    protected $fillable = [
        'heading',
        'image_url',
    ];

    /**
     * Get the value points for this values section.
     */

}
