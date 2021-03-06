<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\CommentRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource. Repository pattern used here as eloquent is abstracted away behind the
     * RepositoryInterface and data source could be easily swaped out for something else. Interface is currently bound
     * to the Eloquent specific class in BackendServiceProvider.
     *
     * @param $slug
     * @param \App\Repositories\PostRepositoryInterface $posts
     * @param \App\Repositories\CommentRepositoryInterface $comment
     * @internal param \App\Repositories\PostRepositoryInterface $post
     * @internal param int $id
     * @return Response
     */
	public function show($slug, PostRepositoryInterface $posts, CommentRepositoryInterface $comment)
	{
	    $post = $posts->findPost($slug);
        $comments = $comment->getComments($post->id);
        return view('posts.show', compact('post','comments'));


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
