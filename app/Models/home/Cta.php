<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cta extends Model
{
    use HasFactory;

    protected $table = 'home_ctas';

    protected $fillable = [
        'img',
        'heading',
        'button_text',
        'button_link',
    ];
}
