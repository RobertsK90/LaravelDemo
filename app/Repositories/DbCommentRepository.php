<?php namespace App\Repositories;

use App\Comment;

class DbCommentRepository implements CommentRepositoryInterface {

   protected $post;

   public function __construct(Comment $comment){
       $this->comment = $comment;
   }

    public function getAll(){

    }

    public function getComments($postId) {
        return $this->comment->orderBy('created_at','desc')->with('user')->where('post_id', '=', $postId)->get();
    }
}