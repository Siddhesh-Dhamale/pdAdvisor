<?php

namespace App\Models\about;

use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    protected $table = 'about_us_csr_section';

    protected $fillable = [
        'heading',
        'description',
    ];
}
