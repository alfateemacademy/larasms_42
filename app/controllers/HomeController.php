<?php

class HomeController extends BaseController {
	
	public function index()
	{
		$latestMessages = Message::with([
			'user', 
			'category', 
			'comments' => function($q) {
				$q->where('comment_status', 1);
		}])->where('message_status', 1)
			->orderBy('created_at', 'DESC')
			->paginate(5);

			// return $latestMessages;

		return View::make('front.home.index')
			->with('latestMessages', $latestMessages);
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::back();
	}
}
