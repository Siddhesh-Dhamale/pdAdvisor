<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolIndIn extends Model
{
    protected $table = 'sol_ind_ins';

    protected $fillable = [
        'page_name',
        'section_title',
        'heading',
        'description',
        'cta_img',
        'cta_heading_1',
        'cta_heading_2',
        'cta_btn_text',
        'cta_btn_link',
    ];
}
