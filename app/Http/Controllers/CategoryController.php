<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('title', 'asc')->get();
        return view('category.index', compact('categories'));
    }

    public function show(Category $category) {
        return view('category.show', compact('category'));
    }

    public function create() {
        return view('category.create');
    }

    public function posts(Category $category) {
        $posts = $category->posts()->get();
        return $posts;
    }

    public function store() {
        category::create([
            'title' => request('title')
        ]);
        return redirect('/posts/create');
    }
}
