<?php

namespace App;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories');
    }
}
