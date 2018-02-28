<?php

namespace App\Http\Controllers;

use App\Post;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function actions() {
        $actions = [];
        foreach (Route::getRoutes()->getRoutes() as $route) {
            $action = $route->getAction();

            if (array_key_exists('controller', $action)) {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                array_push($actions, $action['controller']);
            }
        }
        sort($actions);
        return view('home.actions', compact('actions'));
    }

}

?>
