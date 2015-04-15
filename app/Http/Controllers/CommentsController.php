<?php namespace App\Http\Controllers;

use App\Commands\Comments\AddCommentCommand;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AddCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Commander\CommandBus;

class CommentsController extends Controller {

    protected $commandBus;

    function __construct(CommandBus $commandBus){
        $this->commandBus = $commandBus;
    }

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
	public function store(AddCommentRequest $addCommentRequest)
	{
        extract(Input::only('post_id', 'comment'));
        $user_id = Auth::user()->id;

        $this->commandBus->execute(new AddCommentCommand($user_id, $post_id, $comment));

        return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
