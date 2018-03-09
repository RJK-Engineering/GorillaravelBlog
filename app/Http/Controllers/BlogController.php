<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CheckIdBlogs;

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
    public function store(CheckIdBlogs $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'name' => 'required',
        ]);
        $blog = Blog::create($request->only('user_id', 'title', 'name'));

        $user = User::findOrFail(request('user_id'));
        $user->revokePermissionTo('add_blogs');

        flash('Succesfully created blog ' . $blog->title);

        $keyName = $blog->getRouteKeyName();
        return redirect('/' . $blog->$keyName);
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
    public function edit(Blog $blog, CheckIdBlogs $request)
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
    public function update(Blog $blog, CheckIdBlogs $request)
    {
        $this->validate(request(), [
            'user_id' => 'required',
            'title' => 'required',
            'name' => 'required',
        ]);
        $blog->update($request->only('user_id', 'title', 'name'));

        flash('Succesfully updated blog ' . $blog->title);
        return $this->show($blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, CheckIdBlogs $request)
    {
        $blog->delete();
        flash('Succesfully deleted blog ' . $blog->title);
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
        if ($blog->toggleSubscription($user)) {
            flash('Succesfully subscribed to ' . $blog->title);
        } else {
            flash('Succesfully unsubscribed to ' . $blog->title);
        }

        return back();
    }

}

?>
