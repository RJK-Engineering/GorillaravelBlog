<?php

namespace App\Mail;

use App\Blog;
use App\Comment;
use App\Post;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCommentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $comment;
    public $post;
    public $blogger;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
        $this->post = $comment->post();
        $this->blogger = $this->post->blogger();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_comment');
    }

}

?>
