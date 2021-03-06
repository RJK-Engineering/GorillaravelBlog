<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blog;
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

    public function posts(Blog $blog, Category $category) {
        $posts = $category->posts()
        ->where('blog_id', $blog->id)
        ->orderBy('id', 'desc')
        ->get();

        return $posts;
    }

    public function store() {
        category::create([
            'title' => request('title')
        ]);
        flash('Succesfully created category ' . $category->title);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        flash('Succesfully deleted category ' . $category->title);
        return $this->index();
    }

}
