<?php
//use Model\Comment;

class TestReadController extends \BaseController {

	public function user()
	{
		$users = User::all();
		return View::make('test.read.user')->with('data_user', $users);
	}
	public function article()
	{
		$articles = Article::all();
		return View::make('test.read.article')->with('data_article', $articles);
	}
	public function comment()
	{
		$comments = DB::table('comments')->get();
		return View::make('test.read.comment')->with('data_comment', $comments);
		//foreach ($comments as $key) {
		//	var_dump($key->content);
		//}
		
	}
}
