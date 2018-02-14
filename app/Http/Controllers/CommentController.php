<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create() {
        return view('comments.create');
    }

    public function store() {
        Comment::create([
            'comment' => request('comment');
            'article_id' => request('article_id');
        ])
    }
}
