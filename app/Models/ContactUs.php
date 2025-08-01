<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    // If your table name is not the plural 'contact_us', set it explicitly (optional here)
    protected $table = 'contact_us';

    // Mass assignable attributes
    protected $fillable = [
        'page_title',
        'heading',
        'email_1',
        'email_2',
        'phone_number_1',
        'phone_number_2',
        'whatsapp_number',
        'map_url',
        'form_heading',
        'facebook_link',
        'insta_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
    ];
}
