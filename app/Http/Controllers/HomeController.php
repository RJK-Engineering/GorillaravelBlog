<?php

namespace App\Http\Controllers;

use App\Post;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function posts(Blog $blog) {
        $posts = Post::where('blog_id', $blog->id)
            ->orderBy('id', 'desc')
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

}
