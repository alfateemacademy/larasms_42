<?php

class HomeController extends BaseController {
	
	public function index()
	{
		$categories = Category::with('messages')->where('category_status', 1)->get();

		$popularMessages = Message::where('message_status', 1)
			->orderBy('views', 'DESC')
			->take(5)
			->get();

		$latestMessages = Message::where('message_status', 1)
			->orderBy('created_at', 'DESC')
			->paginate(5);

		return View::make('front.home.index')
			->with('categories', $categories)
			->with('popularMessages', $popularMessages)
			->with('latestMessages', $latestMessages);
	}
}
