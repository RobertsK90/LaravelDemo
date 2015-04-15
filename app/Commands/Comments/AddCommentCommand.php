<?php namespace App\Commands\Comments;

class AddCommentCommand {

    protected $user_id;

    protected $post_id;

    protected $comment;

    function __construct($user_id, $post_id, $comment) {
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->comment = $comment;
    }
}