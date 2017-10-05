<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' =>'admin.index' ,function () {
    return view('welcome');
}]);

Route::group(['prefix' => 'admin'], function(){

	Route::get('/', ['as' =>'admin.index' ,function () {
    return view('welcome');
	}]);

	Route::resource('users','UsersController')->middleware('auth.basic');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'   => 'users.destroy'
	])->middleware('auth.basic');

	Route::resource('categories','CategoriesController')->middleware('auth.basic');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as'   => 'categories.destroy'
	])->middleware('auth.basic');

	Route::resource('tags','TagsController')->middleware('auth.basic');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as'   => 'tags.destroy'
	])->middleware('auth.basic');

  Route::resource('articles', 'ArticlesController')->middleware('auth.basic');
  Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as'   => 'articles.destroy'
	])->middleware('auth.basic');

  Route::get('images',[
    'uses' =>  'ImageController@index',
    'as'   =>  'image.index'
  ]);

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
