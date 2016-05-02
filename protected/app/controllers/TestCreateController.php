<?php

class TestCreateController extends BaseController{
  public function user()
  {
    return View::make('test.create.user');
  }
  
  public function userpost()
  {
    //var_dump($_POST);
    $validator = Validator::make(
    	Input::all(),
    	array(
            "firstname"             => "required",
            "lastname"              => "required",
    		    "email"					        => "required|email|unique:users,email",
    		    "password"              => "required|min:6",
            "password_confirmation" => "same:password",
    	)
    );
    if ($validator->passes()) {
    	$user = new User;
      $user->fname    = Input::get('firstname');
      $user->lname    = Input::get('lastname');
	    $user->email    = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	    $user->save();

    	return Redirect::to('user_create')->with('register_success', 'Selamat, Anda telah resmi menjadi pengangguran, silakan cek email untuk aktivasi :P');
    }
    else {
    	return Redirect::to('user_create')
    		->withErrors($validator)
    		->withInput();
    }
  }

  public function article()
  {
    return View::make('test.create.article');
  }
  
  public function articlepost()
  {
    //var_dump($_POST);
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
