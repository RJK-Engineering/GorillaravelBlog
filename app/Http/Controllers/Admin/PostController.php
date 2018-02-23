<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::orderBy('id', 'desc')
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.admin.index', compact('posts'));
    }

}
