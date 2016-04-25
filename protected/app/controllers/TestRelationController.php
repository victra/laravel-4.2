<?php
 
class TestRelationController extends BaseController 
{
	public function index()
	{
		$articles = Article::all();
		return View::make('test.relation_db.index')->with('data_article', $articles);
	}
}