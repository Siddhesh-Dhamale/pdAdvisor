<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'image'
    ];
    // Blog can have many Topics through the pivot table (by name string)
    public function topics()
    {
        return $this->belongsToMany(
            Topic::class,
            'blog_topic',
            'blog_id',
            'topic_name',
            'id',
            'name'
        );
    }

    // Blog can have many Industries through the pivot table (by title string)
    public function industries()
    {
        return $this->belongsToMany(
            Industry::class,
            'blog_industry',
            'blog_id',
            'industry_title',
            'id',
            'title'
        );
    }
    public function solutions()
    {
        return $this->belongsToMany(Solution::class, 'blog_solutions', 'blog_id', 'solution_title', 'id', 'title');
    }
}
