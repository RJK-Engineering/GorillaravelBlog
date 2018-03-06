<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:add_blogs'], ['only' => ['create', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'user_id' => 'required',
            'title' => 'required',
        ]);
        $blog = Blog::create([
            'user_id' => request('user_id'),
            'title' => request('title'),
        ]);
        $user = User::findOrFail(request('user_id'));
        $user->revokePermissionTo('add_blogs');
        return redirect('/' . $blog->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate(request(), [
            'user_id' => 'required',
            'title' => 'required',
        ]);
        $blog->update([
            'user_id' => request('user_id'),
            'title' => request('title'),
        ]);
        return $this->show($blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return $this->index();
    }

    public function toggleSubscription()
    {
        $this->validate(request(), [
            'blog_id' => 'required',
            'user_id' => 'required',
        ]);

        $blog = Blog::find(request('blog_id'));
        $user = User::find(request('user_id'));
        $blog->toggleSubscription($user);

        return back();
    }

}

?>
