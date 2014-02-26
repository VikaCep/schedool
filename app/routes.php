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
/*
Route::get('/', array('before'=>'auth.basic', function()
{
	return View::make('home');	
}));*/

Route::any('/', [	
	'as'   => '/',
	function()
	{
		return View::make('home');	
	}
	]);

Route::controller('password', 'RemindersController');

Route::post('/auth/login', [
	'as'   => 'auth/login',
	'uses' => 'AuthController@loginAction'
	]);
Route::post('/auth/loginPopup', [
	'as'   => 'auth/loginPopup',
	'uses' => 'AuthController@loginAction'
	]);
Route::get('/auth/login', [
	function()
	{
		return View::make('user/login');	
	}
	]);
Route::get('/auth/loginPopup', [
	function()
	{
		return View::make('user/login_popup');	
	}
	]);
Route::any('/thankyou', [
	function()
	{
		return View::make('site/thankyou');	
	}
	]);


Route::group(['before' => 'auth'], function()
{
	Route::any('/profile', [
		'as'   => 'user/profile',
		'uses' => 'UserController@profileAction'
		]);
	Route::any('/auth/logout', [
		'as'   => 'auth/logout',
		'uses' => 'AuthController@logoutAction'
		]);
	Route::resource('subjects', 'SubjectsController');	
	Route::resource('subjectExams', 'SubjectExamsController');	
	Route::resource('lessons', 'LessonsController');
	Route::get('/addExam/{idsubject}', array(
		'as'=>'subjectExams.add',
		'uses'=>'SubjectExamsController@add'));
	Route::get('/addClass/{idsubject}', array(
		'as'=>'lessons.add',
		'uses'=>'LessonsController@add'));
});
