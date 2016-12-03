<?php

class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function detail($slug)
	{
		$message = Message::where('slug', $slug)->first();

		return View::make('front.message.detail')
			->with('message', $message);
	}


}
