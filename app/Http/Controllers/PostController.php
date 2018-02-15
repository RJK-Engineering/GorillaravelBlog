<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        $comments = $post->comments()->get();

        return view('posts.show', compact('post', 'comments'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $this->validate(request(),
        [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'category_id' =>request('category')
        ]);

        return redirect('/');
    }

}
