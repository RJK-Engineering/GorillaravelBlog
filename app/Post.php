<?php

namespace App;

class Post extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function toggleCommentStatus() {
        return $this->comments_on_off = ! $this->comments_on_off;
    }

}
