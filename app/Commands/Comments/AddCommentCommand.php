<?php namespace App\Commands\Comments;

class AddCommentCommand {

    public $user_id;

    public $post_id;

    public $comment;

    function __construct($user_id, $post_id, $comment) {
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->comment = $comment;
    }
}