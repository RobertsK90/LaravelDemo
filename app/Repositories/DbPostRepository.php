<?php namespace App\Repositories;


use App\Post;

class DbPostRepository implements PostRepositoryInterface {

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }
    public function getAll() {
        return $this->post
            ->with('user')
            ->paginate(3);
    }

    public function findPost($slug){
        return $this->post
            ->where('slug', '=', $slug)
            ->first();
    }




} 