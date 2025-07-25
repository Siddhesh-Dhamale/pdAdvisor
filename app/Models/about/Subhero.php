<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class Subhero extends Model
{

    protected $table = 'about_us_subhero_section';

    protected $fillable = [
        'heading',
        'description',
        'image_url',
    ];



}
