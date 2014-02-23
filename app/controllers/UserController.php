<?php

use Illuminate\Support\MessageBag;

class UserController extends Controller
{
	public function profileAction()
	{
		return View::make("user/profile");
	}
}


