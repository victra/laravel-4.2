<?php
 
class TestUpdatecontroller extends BaseController 
{
	public function article($id)
	{
		
	    $articlebyid = DB::table('articles')->where('id', '=' ,$id)->first();
	    $articlebyid =[ 'articlebyid' => $articlebyid ];
	  	return View::make('test.update.article', $articlebyid);
		//var_dump($_POST);
	}
	public function article_update($id)
	{
	    $validator = Validator::make(
	        Input::all(),
	        array(
	            "userid"             => "required",
	            "title"              => "required",
	            "content"            => "required",
	        )
	    );
	    if ($validator->passes()) {
	        $article = new Article;
	        $article->user_id   = Input::get('userid');
	        $article->title     = Input::get('title');
	        $article->content   = Input::get('content');
	        $article->save();

	        return Redirect::to('article_create')->with('register_success', 'Selamat, Anda telah resmi menjadi pengangguran, silakan cek email untuk aktivasi :P');
	    }
	    else {
	        return Redirect::to('article_create')
	            ->withErrors($validator)
	            ->withInput();
	    }
	}
}