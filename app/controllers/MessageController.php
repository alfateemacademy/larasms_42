<?php

class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function detail($slug)
	{
		/*$message = Message::with(['comments' => function($q) {

			$q->where('comment_status', 1);

		}])->where('slug', $slug)->first();*/

		$message = Message::where('slug', $slug)->first();
		$message->increment('views');
		$comments  = Comment::where('message_id', $message->id)
			->where('comment_status', 1)
			->get();

		//return $message;

		return View::make('front.message.detail')
			->with('message', $message)
			->with('comments', $comments);
	}

	public function postComment($messageId)
	{
		Comment::create([
			'message_id' => $messageId,
			'member_id' => (Auth::check()) ? Auth::user()->id : null,
			'name' => (Auth::check()) ? Auth::user()->name : Input::get('name'),
			'email' => (Auth::check()) ? Auth::user()->email : Input::get('email'),
			'comment_content' => Input::get('comment_content'),
			'comment_status' => 1
		]);

		return Redirect::back()->with('success', 'Your comment has been posted.');
	}


}
