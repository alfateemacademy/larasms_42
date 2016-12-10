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
			->where('title', 'LIKE', '%'.Input::get('q').'%')
			->orWhere('message_content', 'LIKE', '%'.Input::get('q').'%')
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

	public function userMessages($username)
	{
		$user = User::where('username', $username)->first();
		$messages = Message::where('user_id', $user->id)->paginate(2);

		return View::make('front.user.detail')
			->with('user', $user)
			->with('messages', $messages);
	}
}
