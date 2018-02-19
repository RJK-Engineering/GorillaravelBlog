<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Category;
use Image;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->get();
        $categories = Category::orderBy('title', 'asc')->get();
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
        $this->validate(request(),
        [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'post_thumbnail' => 'image|max:2000'
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->save(public_path('uploads/' . $filename));

            $post->post_thumbnail = $filename;
            $post->save();
        }

        $post->categories()->attach(request('category'));

        return redirect('/');
    }

    public function changeCommentStatus(Post $post) {
        if ($post->comments_on_off) {
            $post->comments_on_off = 0;
            $post->save();
        }
        else {
            $post->comments_on_off = 1;
            $post->save();
        }
        return back();
    }

}
