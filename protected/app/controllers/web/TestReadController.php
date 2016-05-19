<?php namespace Controller\WEB;

use Article;
use Comment;
use User;

use App;
use View;

class TestReadController extends \BaseController {

	public function user()
	{
		$users = User::all();
		if(App::environment('testing')) {
			$response['status'] = OK;
			$response['results'] = $users->toArray();
			return Response::json($response);
		}
		return View::make('test.read.user')->with('data_user', $users);

	}
	public function article()
	{
		$articles = Article::all();
		return View::make('test.read.article')->with('data_article', $articles);
	}
	public function comment()
	{
		$comments = Comment::all();
		return View::make('test.read.comment')->with('data_comment', $comments);
		//foreach ($comments as $key) {
		//	var_dump($key->content);
		//}
		
	}
}
