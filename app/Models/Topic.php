<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name'];

    // Topic can belong to many Blogs via the string name in pivot
    public function blogs()
    {
        return $this->belongsToMany(
            Blog::class,
            'blog_topic',
            'topic_name',
            'blog_id',
            'name',
            'id'
        );
    }
}
