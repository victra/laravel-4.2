<?php

class TestDeleteController extends BaseController
{
	public function comment($id)
	{
		//$comment = DB::table('comments')->where('id', $id)->delete();
		$comment = DB::table('comments')->delete($id);
		//var_dump($comment);
		//$comment->delete();
		//return View::make('test.read.comment');
		return Redirect::to('comment_list');
	}
}