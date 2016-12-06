<?php

class HomeController extends BaseController {
	
	public function index()
	{
		return View::make('front.home.index');
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::back();
	}
}
