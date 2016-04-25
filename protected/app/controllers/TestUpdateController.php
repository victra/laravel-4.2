<?php
 
class TestUpdatecontroller extends BaseController 
{
	public function article($id)
	{
		
	    $articlebyid = DB::table('articles')->where('id', '=' ,$id)->first();
	    $articlebyid =[ 'articlebyid' => $articlebyid ];
	  	return View::make('test.update.article', $articlebyid);
		//var_dump($articlebyid);
	}
	public function articlepost($id)
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
	        $article = Article::find($id);
	        $article->user_id   = Input::get('userid');
	        $article->title     = Input::get('title');
	        $article->content   = Input::get('content');
	        $article->save();

	        return Redirect::to('article_edit/'.$id)->with('register_success', 'Selamat, Anda telah resmi menjadi pengangguran, silakan cek email untuk aktivasi :P');
	    }
	    else {
	        return Redirect::to('article_edit/'.$id)
	            ->withErrors($validator)
	            ->withInput();
	    }
	}
}