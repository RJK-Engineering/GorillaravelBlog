<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Image;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }
    public function index() {
        $posts = Post::orderBy('id', 'desc')
                    ->filter(request(['month', 'year']))
                    ->get();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function show(Post $post) {
        $comments = $post->comments()->get();
        return view('posts.show', compact('post', 'comments'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'post_thumbnail' => 'image|max:2000'
        ]);
        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        if ($request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->save(public_path('uploads/' . $filename));

            $post->post_thumbnail = $filename;
            $post->save();
        }

        if (sizeof(request('category'))) {
            $post->categories()->sync(request('category'));
        }
        return redirect('/');
    }

    public function update(Post $post, Request $request) {
        $input = request()->only('title', 'body');
        $post->update($input);

        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->save(public_path('uploads/' . $filename));

            $post->post_thumbnail = $filename;
            $post->save();
        }

        $input = request()->only('category');
        if (sizeof($input)) {
            $post->categories()->sync($input['category']);
        }

        return redirect('/posts/' . $post->id);
    }

    public function toggleCommentStatus(Post $post) {
        $post->toggleCommentStatus();
        $post->save();
        return back();
    }

    public function search(Request $request) {
        $search_term = request('q');
        $posts = Post::search($search_term)->get();

        return view('posts.index', compact('posts'));
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

}
