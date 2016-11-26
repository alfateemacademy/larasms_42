<?php

class AdminAuthController extends \BaseController {

	public function login()
	{
		return View::make('admin.auth.login');
	}

	public function postLogin()
	{
		$auth = Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]);
		if( $auth )
		{
			return Redirect::intended('/admin');
		}

		return Redirect::back()->withErrors(['message' => 'Invalid email and/or password.']);
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::route('admin.auth.login');
	}


}
