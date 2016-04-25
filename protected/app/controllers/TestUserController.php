<?php
 
class TestUserController extends BaseController 
{
    // layout dengan menggunakan blade
    public function profile($id) {
        //$profile = User::all();
        $profile = User::find($id);
        $content = Article::where('user_id', '=', $id)->get();
        return View::make('test.read.profile')->with('data_profile', $profile);
        
        //$profile = DB::table('users')->where('id', $id)->first();
        //return View::make('test.read.profile')->with('data_content', $content);
        //foreach ($content as $key) 
        //{
        //    var_dump($key->content);
        //}
    }
}