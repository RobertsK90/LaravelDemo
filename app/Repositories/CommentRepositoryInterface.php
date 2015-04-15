<?php namespace App\Repositories;

interface CommentRepositoryInterface {
    public function getAll();
    public function getComments($postId);
}