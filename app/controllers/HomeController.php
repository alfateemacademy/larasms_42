<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return "Welcome Page";
		//return View::make('hello');
	}

	public function about() {

		return "About Page";
	}

	public function contact() {

		return "Contact Page";
	}


}
