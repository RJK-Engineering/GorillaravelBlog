<?php

namespace App;
use Laravel\Scout\Searchable;
use Carbon\Carbon;

class Post extends Model
{
    use Searchable;

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function toSearchableArray() {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function toggleCommentStatus() {
        return $this->comments_on_off = ! $this->comments_on_off;
    }

    public static function archives() {
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
                    ->groupBy('year', 'month')
                    ->orderByRaw('min(created_at)')
                    ->get()
                    ->toArray();
    }

    public function scopeFilter($query, $filters) {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

}
