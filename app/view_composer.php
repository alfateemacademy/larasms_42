<?php
View::composer(['front.home.*', 'front.message.*', 'front.category.*', 'front.user.*'], function($view) {
	$categories = Category::with('messages')->where('category_status', 1)->get();

	$popularMessages = Message::where('message_status', 1)
			->orderBy('views', 'DESC')
			->take(5)
			->get();

    $view->with('categories', $categories)
    	->with('popularMessages', $popularMessages);
});
