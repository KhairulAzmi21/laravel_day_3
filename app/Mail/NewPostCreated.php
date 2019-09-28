<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class NewPostCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $postInThisClass;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->postInThisClass = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.post.new_created')
                    ->subject("New Post")
                    ->with([
                        'post' => $this->postInThisClass
                    ]);
    }
}
