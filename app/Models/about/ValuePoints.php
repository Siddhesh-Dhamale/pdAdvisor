<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class ValuePoints extends Model
{
    protected $table = 'about_us_value_points';

    protected $fillable = [
        'point_heading',
        'point_description',
        'position',
    ];

    /**
     * Get the parent values section for this value point.
     */

}
