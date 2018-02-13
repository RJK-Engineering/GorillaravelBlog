<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
      $posts = Post::orderBy('id', 'desc')->get();
      return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
      return view('posts.show', compact('post'));
    }

    public function create() {
      return view('posts.create');
    }

    public function store() {
      Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'category_id' =>request('category')
      ]);

      return redirect('/');
    }

}
