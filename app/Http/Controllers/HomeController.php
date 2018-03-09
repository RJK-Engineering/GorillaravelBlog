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
        $posts = $blog->posts()
            ->orderBy('id', 'desc')
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('blog', 'posts'));
    }
    public function overview() {
        $posts = Post::limit(4)->orderBy('id', 'desc')->get();
        $blogs = collect();
        foreach($posts as $post){
            $blogs->push(Blog::find($post->blog_id));
        }

        return view('home.overview', compact('posts', 'blogs'));
    }

}
