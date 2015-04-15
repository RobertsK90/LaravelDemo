<?php namespace App\Repositories;

use App\Comment;

interface CommentRepositoryInterface {
    public function getAll();
    public function getComments($postId);
    public function save(Comment $comment);
}