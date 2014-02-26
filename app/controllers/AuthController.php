<?php

class AuthController extends \BaseController {

	public function loginAction()
	{
		$validator = Validator::make(Input::all(), [
			"username" => "required",
			"password" => "required"
			]);
		if ($validator->passes())
		{
			$credentials = [
			"username" => Input::get("username"),
			"password" => Input::get("password")
			];
			if (Auth::attempt($credentials))
			{
				return Redirect::route("user/profile")->with('flash_success', 'You are successfully logged in.');
			}
		}			
		return Redirect::route("auth/login")->with('flash_warning', "Username and/or password invalid.");
	}


	public function logoutAction()
	{
		Auth::logout();
		return Redirect::route("/")->with('flash_info', 'You are successfully logged out.');;
	}

}