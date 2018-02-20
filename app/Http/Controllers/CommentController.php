<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function show(Comment $comment) {
        return redirect('/posts/' . $comment->post_id . '#comments');
    }

    public function create() {
        return view('comments.create');
    }

    public function store() {
        $comment = Comment::create([
            'comment' => request('comment'),
            'post_id' => request('post_id')
        ]);
        return back();
    }

    public function destroy(Comment $comment) {
        $comment->delete();
        return back();
    }
}
