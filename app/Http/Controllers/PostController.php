<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Authorizable;

use App\Blog;
use App\Category;
use App\User;
use App\Post;
use App\Mail\NewPostMail;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckIdPosts;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:add_posts'], ['only' => ['create', 'store']]);
    }

    public function index() {
        $posts = Post::orderBy('created_at', 'desc')
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function latest($limit = 10)
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->take($limit)
            ->get();

        return view('posts.latest', compact('posts'));
    }

    public function show(Blog $blog, Post $post)
    {
        $comments = $post->comments()->get();
        return view('posts.show', compact('blog', 'post', 'comments'));
    }

    public function create(Blog $blog, CheckIdPosts $request)
    {
        if ($blog->posts()->count() < config('app.max_free_posts')) {
            return view('posts.create', compact('blog'));
        } else {
            return view('pay.index', compact('blog'));
        }
    }

    public function store(CheckIdPosts $request)
    {
        $this->validate(request(), [
            'blog_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'post_thumbnail' => 'image|max:2000'
        ]);
        $post = Post::create([
            'blog_id' => request('blog_id'),
            'title' => request('title'),
            'body' => request('body'),
        ]);

        if ($request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->save(public_path('uploads/' . $filename));

            $post->post_thumbnail = $filename;
            $post->save();
        }

        if (sizeof(request('category'))) {
            $post->categories()->sync(request('category'));
        }

        $user_id = Auth::id();
        $blog = Blog::where('user_id', $user_id)->first();
        $postCount = Post::where('blog_id', $blog->id)->count();
        if ($postCount > 4)
        {
            User::findOrFail($user_id)->revokePermissionTo('add_posts');
        }

        $this->_sendNewPostMail($post);

        return redirect('/' . $blog->title);
    }

    private function _sendNewPostMail(Post $post)
    {
        $blog = $post->blog();
        foreach ($blog->subscriptions as $user) {
            \Mail::to($user)->send(new NewPostMail($user, $post));
        }
    }

    public function edit(Blog $blog, Post $post)
    {
        return view('posts.edit', compact('post', 'blog'));
    }

    public function update(Blog $blog, Post $post, CheckIdPosts $request)
    {
        $input = request()->only('title', 'body');
        $post->update($input);

        if ( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->save(public_path('uploads/' . $filename));

            $post->post_thumbnail = $filename;
            $post->save();
        }

        $input = request()->only('category');
        if (sizeof($input)) {
            $post->categories()->sync($input['category']);
        }

        return redirect('/' . $blog->title . '/posts/' . $post->id);
    }

    public function destroy(Post $post, CheckIdPosts $request)
    {
        $post->delete();
        return back();
    }

    public function toggleCommentStatus(Blog $blog, Post $post, CheckIdPosts $request)
    {
        $post->toggleCommentStatus();
        $post->save();
        return back();
    }

    public function search(Request $request)
    {
        $search_term = request('q');
        $blog_id = request('blog');
        $blog = Blog::findOrFail($blog_id);
        $posts = Post::search($search_term)->where('blog_id', request('blog'))->get();

        return view('posts.index', compact('posts', 'blog'));
    }

    public function json(Blog $blog) {
        return $blog->posts()->orderBy('id', 'desc')->get();
    }

}
