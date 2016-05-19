<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('user/{id}', 'TestUserController@profile');
// test link
Route::get('test1', 'TestLinkController@link1');
Route::get('test2', 'TestLinkController@link2');
// test create user
Route::get('user_create', 'TestCreateController@user');
Route::post('user_create', 'TestCreateController@userpost');
// test create artikel
Route::get('article_create', 'TestCreateController@article');
Route::post('article_create', 'TestCreateController@articlepost');
// test show
Route::get('user_list', 'Controller\WEB\TestReadController@user');
Route::get('article_list', 'TestReadController@article');
Route::get('comment_list', 'TestReadController@comment');
// test update artikel
Route::get('article_edit/{id}', 'TestUpdateController@article');
Route::post('article_update/{id}', array('as' => 'article_update', 'uses' => 'TestUpdateController@articlepost'));
// test relasi database
Route::get('relation', 'TestRelationController@index');
// test delete comments
Route::get('comment_delete/{id}', 'TestDeleteController@comment');

Route::get('relasi', 'TestArticleController@article');

//Route::group(array('before'=>'auth'), function()
//	{
//		Route::resource('crud', 'Crud@create');
//	});

Route::get('crud', 'TestCrudController@create');
