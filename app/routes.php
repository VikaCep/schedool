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

Route::get("/", [	
	function()
	{
		return View::make('home');	
	}
	]);

Route::controller('password', 'RemindersController');

Route::post("/auth/login", [
	"as"   => "auth/login",
	"uses" => "AuthController@loginAction"
	]);

Route::get("/auth/login", [
	function()
	{
		return View::make('user/login');	
	}
	]);

Route::any("/thankyou", [
	function()
	{
		return View::make('site/thankyou');	
	}
	]);


Route::group(["before" => "auth"], function()
{
	Route::any("/profile", [
		"as"   => "user/profile",
		"uses" => "UserController@profileAction"
		]);
	Route::any("/auth/logout", [
		"as"   => "auth/logout",
		"uses" => "AuthController@logoutAction"
		]);
	Route::resource('subjects', 'SubjectsController');	
	Route::resource('subjectExams', 'SubjectExamsController');
	Route::get('/addExam/{idsubjecet}', array(
		"as"=>'subjectExams.add',
		"uses"=>'SubjectExamsController@add'));
});

