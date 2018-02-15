<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('category.index', compact('categories'));
    }

    public function show(Category $category) {
        return view('category.show', compact('category'));
    }

    public function create() {
        return view('category.create');
    }

    public function store() {
        category::create([
            'title' => request('title')
        ]);

        return redirect('/categories');
    }
}
