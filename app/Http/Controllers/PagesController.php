<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home(PostRepositoryInterface $post) {
        $posts = $post->getAll();
        return view('pages.index', compact('posts'));
    }

}
