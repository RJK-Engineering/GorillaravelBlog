<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CheckIdComments;
use App\Post;
use App\Mail\NewCommentMail;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index(Comment $comment)
    {
        return redirect('/posts/' . $comment->post_id . '#comments');
    }

    public function show(Comment $comment)
    {
        return redirect('/posts/' . $comment->post_id . '#comments');
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store()
    {
        $postId = request('post_id');
        $comment = Comment::create([
            'comment' => request('comment'),
            'post_id' => $postId,
        ]);

        $mail = new NewCommentMail($comment);
        $blogger = Post::find($postId)->blogger();
        \Mail::to($blogger)->send($mail);

        flash('Succesfully added comment');
        return back();
    }


    public function destroy(Comment $comment, CheckIdComments $request)
    {
        $comment->delete();
        flash('Succesfully deleted comment');
        return back();
    }

}

?>
